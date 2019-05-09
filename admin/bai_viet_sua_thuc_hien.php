<?php 
	session_start();
	if($_SESSION['level']!=2){
	  header("Location: ../trang_chu.php");
	}

	// Lấy các dữ liệu bên trang Thêm mới bài viết
	$id = $_POST['txtID'];
	$tieude = $_POST['txtTieuDe'];
	$loaitintucid = $_POST['txtLoaiTinTuc'];
	$mota = $_POST['txtMoTa'];
	$noidung = $_POST['txtNoiDung'];

	// Upload hình ảnh
	$anhminhhoa = "images/" . basename($_FILES["txtAnhMinhHoa"]["name"]);
	$fileanhtam = $_FILES["txtAnhMinhHoa"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam, $anhminhhoa);
	if(!$result) {
		$anhminhhoa=NULL;
	}

	// Chàn dữ liệu vào bảng tbl_tin_tuc
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	// Bước 2: Chàn dữ liệu vào bảng Liên hệ
	if($anhminhhoa==NULL) {		
		$sql = "
		UPDATE `tbl_tin_tuc` SET 
			`tieu_de` = '".$tieude."', 
			`loai_tin_tuc_id` = '".$loaitintucid."', 
			`mo_ta` = '".$mota."', 
			`noi_dung` = '".$noidung."'
		WHERE `id` = '".$id."'
		";
	} else {
		$sql = "
		UPDATE `tbl_tin_tuc` SET 
			`tieu_de` = '".$tieude."', 
			`loai_tin_tuc_id` = '".$loaitintucid."', 
			`mo_ta` = '".$mota."', 
			`noi_dung` = '".$noidung."', 
			`anh_minh_hoa` = '".$anhminhhoa."'				
		WHERE `id` = '".$id."'
		";
	}
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Sửa bài viết thành công!!!");
			window.location.href="bai_viet_quan_tri.php";
		</script>';
;?>
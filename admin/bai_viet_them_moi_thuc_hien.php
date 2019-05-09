<?php 
	session_start();
	if($_SESSION['level']!=2){
	  header("Location: ../trang_chu.php");
	}
	// Lấy các dữ liệu bên trang Thêm mới bài viết
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

	// Bước 2: Chàn dữ liệu vào bảng tin tức
	$sql = "
	INSERT INTO `tbl_tin_tuc` (
		`id`, 
		`tieu_de`,
		`loai_tin_tuc_id`, 
		`mo_ta`, 
		`noi_dung`, 
		`anh_minh_hoa`) 
	VALUES (
		NULL, 
		'".$tieude."',
		'".$loaitintucid."',
		'".$mota."', 
		'".$noidung."',
		'".$anhminhhoa."')";
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Thêm mới bài viết thành công!!!");
			window.location.href="bai_viet_quan_tri.php";
		</script>';
;?>
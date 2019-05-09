<?php 
	 session_start();
	 if($_SESSION['level']!=2){
	   header("Location: ../trang_chu.php");
	 }

	// Lấy các dữ liệu bên trang Thêm mới bài viết
	$id = $_POST['txtID'];
	$taikhoan = $_POST['txtTaiKhoan'];
	$matkhau = $_POST['txtMatKhau'];
	// Upload hình ảnh
	$anhnguoidung = "images/" . basename($_FILES["txtAnhNguoiDung"]["name"]);
	$fileanhtam = $_FILES["txtAnhNguoiDung"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam, $anhnguoidung);
	if(!$result) {
		$anhnguoidung=NULL;
	}

	// Chàn dữ liệu vào bảng tbl_tin_tuc
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	// Bước 2: Chàn dữ liệu vào bảng Liên hệ
	if($anhnguoidung==NULL) {		
		$sql = "
		UPDATE `tbl_nguoi_dung` SET 
			`tai_khoan` = '".$taikhoan."', 
			`mat_khau` = '".$matkhau."'
		WHERE `id` = '".$id."'
		";
	} else {
		$sql = "
		UPDATE `tbl_nguoi_dung` SET 
			`tai_khoan` = '".$taikhoan."', 
			`mat_khau` = '".$matkhau."', 
			`anh_nguoi_dung` = '".$anhnguoidung."'				
		WHERE `id` = '".$id."'
		";
	}
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;
	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Sửa người dùng thành công!!!");
			window.location.href="nguoi_dung_quan_tri.php";
		</script>';
;?>
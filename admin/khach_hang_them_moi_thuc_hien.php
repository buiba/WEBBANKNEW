<?php 
	session_start();
	if($_SESSION['level']!=2){
	  header("Location: ../trang_chu.php");
	}
	// Lấy các dữ liệu bên trang Thêm mới bài viết
	$tenkhach = $_POST['txtTenKhachHang'];
	$loaikhachhang = $_POST['txtLoaiKhachHang'];
	$diachi = $_POST['txtDiaChi'];
    $sodienthoai = $_POST['txtSoDienThoai'];
    $email = $_POST['txtEmail'];
    $nguoilienhe = $_POST['txtNguoiLienHe'];
    $hanmuc = $_POST['txtHanMuc'];
    $dieukhoan = $_POST['txtDieuKhoan'];
	// Chàn dữ liệu vào bảng tbl_khach_hang
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	// Bước 2: Chàn dữ liệu vào bảng tin tức
	$sql = "
	INSERT INTO `tbl_khachhang` (
		`id`, 
		`loai_khach_hang_id`,
		`tenkh`, 
		`diachi`, 
        `sodienthoai`, 
        `gmail`, 
        `nguoi-lien-he`, 
        `credit-limit`, 
		`credit-terms`) 
	VALUES (
		NULL, 
		'".$loaikhachhang."',
		'".$tenkhach."',
		'".$diachi."', 
        '".$sodienthoai."',
        '".$email."', 
        '".$nguoilienhe."',
        '".$hanmuc."', 
        '".$dieukhoan."')";
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Thêm mới bài viết thành công!!!");
			window.location.href="khach_hang_quan_tri.php";
		</script>';
;?>
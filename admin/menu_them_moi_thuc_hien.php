<?php 
session_start();
if(($_SESSION['level']!=2)){
  header("Location: ../trang_chu.php");
}

	// Lấy các dữ liệu bên trang đăng nhập
		$tenmenu = $_POST['txtTenMeNu'];
		$duongdan= $_POST['txtDuongDan'];
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	
	$sql = "
		INSERT INTO `tbl_menu` (
			`menu_id`, 
			`ten_menu`, 
			`dan_link`) 
		VALUES (
			NULL, 
			'".$tenmenu."',
			'".$duongdan."')";
			echo($sql);
		 mysqli_query($ketnoi,$sql);
		echo '
			<script type="text/javascript">
				alert("Thêm mới menu thành công!!!");
				window.location.href="menu_quan_tri.php";
			</script>';
;?>
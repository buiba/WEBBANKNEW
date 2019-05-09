<?php 
	session_start();
	if($_SESSION['level']!=2){
	  header("Location: ../trang_chu.php");
	}
	$id=$_POST['txtID'];
	$tenmenu=$_POST['txtTenMenu'];
	$duongdan=$_POST['txtDuongDan'];
	// Chàn dữ liệu vào bảng tbl_tin_tuc
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	// Bước 2: Chàn dữ liệu vào bảng Liên hệ
		
		$sql = "
		UPDATE `tbl_menu` SET 
			`ten_menu` = '".$tenmenu."', 
			`dan_link` = '".$duongdan."'
		WHERE `menu_id` = '".$id."'
		";
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;
	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Sửa menu thành công!!!");
			window.location.href="menu_quan_tri.php";
		</script>';
;?>
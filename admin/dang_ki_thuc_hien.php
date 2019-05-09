<?php 


	// Lấy các dữ liệu bên trang đăng nhập
		$taikhoan = $_POST['txtTaiKhoan'];
		$matkhau = $_POST['txtMatKhau'];
    	$email = $_POST['txtEmail'];
        $tennguoidung = $_POST['txtTenNguoiDung'];
		$dienthoai = $_POST['txtDienThoai'];
		$nhaclaimatkhau=$_POST['txtNhacLaiMatKhau'];
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	if($matkhau== $nhaclaimatkhau)
 		 {
				$sql = "
				SELECT *
				FROM `tbl_nguoi_dung` 
				WHERE `tai_khoan` = '".$taikhoan."' 
				";
			$result = mysqli_query($ketnoi, $sql);
				if (mysqli_num_rows($result) != 0) {
					echo '
							<script type="text/javascript">
								alert("Người dùng đã tồn tại!!!");
								window.location.href="sigup.php";
							</script>';
					} 
				else {
						$sql = "
							INSERT INTO `tbl_nguoi_dung` (
								`id`, 
								`tai_khoan`,
								`mat_khau`, 
								`email`, 
								`dien_thoai`, 
								`level`,  
								`ten_nguoi_dung`) 
							VALUES (
								NULL, 
								'".$taikhoan."',
								'".$matkhau."',
								'".$email."',
								'".$dienthoai."',
								'1',
								'".$tennguoidung."')";
							}
							// echo($sql);
							mysqli_query($ketnoi, $sql);
							
							echo '
							<script type="text/javascript">
								alert("Đăng kí thành công!!!");
								window.location.href="../login.php";
							</script>';
	
	   }
	   else{
		echo '
			<script type="text/javascript">
				alert("Mật khẩu không khớp!!!");
				window.location.href="../sigup.php";
			</script>';

	   }
;?>
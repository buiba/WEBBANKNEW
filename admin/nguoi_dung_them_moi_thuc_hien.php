<?php 
session_start();
if(($_SESSION['level']!=2)){
  header("Location: ../trang_chu.php");
}

	// Lấy các dữ liệu bên trang đăng nhập
		$taikhoan = $_POST['txtTaiKhoan'];
		$matkhau = $_POST['txtMatKhau'];
    	$email = $_POST['txtEmail'];
        $tennguoidung = $_POST['txtTenNguoiDung'];
		$dienthoai = $_POST['txtDienThoai'];
      $nhaclaimatkhau=$_POST['txtMatKhauNhacLai'];
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	if($matkhau== $nhaclaimatkhau)
 		 {
				$sql = "
				SELECT *
				FROM `tbl_nguoi_dung` 
				WHERE `tai_khoan` = '".$taikhoan."' AND `mat_khau` = '".$matkhau."'
				AND `email` = '".$email."' 
				AND `ten_nguoi_dung` = '".$tennguoidung."' 
				AND `dien_thoai` = '".$dienthoai."' 
				AND `mat_khau` = '".$nhaclaimatkhau."'
				";
			$result = mysqli_query($ketnoi, $sql);
				if (mysqli_num_rows($result) != 0) {
					echo '
							<script type="text/javascript">
								alert("Người dùng đã tồn tại!!!");
								window.location.href=".php";
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
								
								`ten_nguoi_dung`) 
							VALUES (
								NULL, 
								'".$taikhoan."',
								'".$matkhau."',
								'".$email."',
								'".$dienthoai."',
							
								'".$tennguoidung."')";
							}
							echo '
							<script type="text/javascript">
								alert("Đăng kí thành công!!!");
								window.location.href="dang_nhap.php";
							</script>';
	
	   }
	   else{
		echo '
			<script type="text/javascript">
				alert("Mật khẩu không khớp!!!");
				window.location.href="dang_nhap.php";
			</script>';

	   }
;?>
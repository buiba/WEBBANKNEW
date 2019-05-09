	<?php
    ob_start();
    session_start();
    ?>
	<?php
		// Lấy các dữ liệu bên trang Thêm mới bài viết
		$taikhoan = $_POST['txtTaiKhoan'];
		$matkhau = $_POST['txtMatKhau'];

		// Kết nối đến CSDL 
		include("../config/dbconfig.php");
	    $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

		// Chèn dữ liệu vào bảng Liên hệ
		$sql = "
		SELECT *
		FROM `tbl_nguoi_dung` 
		WHERE `tai_khoan` = '".$taikhoan."' AND `mat_khau` = '".$matkhau."'
		";
		//echo $sql;
		$result = mysqli_query($ketnoi, $sql);

		if (mysqli_num_rows($result) == 0) {
			echo'
			<script type="text/javascript">
			alert("Tài khoản hoặc mật khẩu không chính xác!!!");
			window.location.href="../login.php";
			</script>';

		} 
		else {
			$_SESSION['tai_khoan'] = $taikhoan;
			$data=mysqli_fetch_assoc($result);
			$_SESSION['level']=$data["level"];
			if($_SESSION['level']==2){
				header("Location:trang_quan_tri.php");
				exit();
			}
		else{
			$_SESSION['tai_khoan'] = $taikhoan;
			echo'
			<script type="text/javascript">
			alert("Đăng nhập thành công!!!");
			window.location.href="../index.php";
			</script>';
			}
		 }
		;?>
<?php 
	// Lấy các dữ liệu bên trang đăng nhập
		$ten = $_POST['txtTenNganHang'];
		$link = $_POST['txtLinkNganHang'];
			
		$anhminhhoa = "images/".basename($_FILES["txtAnhMinhHoa"]["name"]);
		$fileanhtam = $_FILES["txtAnhMinhHoa"]["tmp_name"];
		$result = move_uploaded_file($fileanhtam, $anhminhhoa);
		if(!$result) {
			$anhminhhoa=NULL;
		}
		// Bước 1: Kết nối đến CSDL 
		include("../config/dbconfig.php");
		$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
			$sql = "
			SELECT *
			FROM `tbl_ngan_hang` 
			WHERE `ten_ngan_hang` = '".$ten."'
			";
		$result = mysqli_query($ketnoi, $sql);
			if (mysqli_num_rows($result) != 0) {
				echo '
						<script type="text/javascript">
							alert("Ngân hàng đã tồn tại!!!");
							window.location.href="ngan_hang_them_moi.php";
						</script>';
				} 
			else {
					$sql = "
						INSERT INTO `tbl_ngan_hang` (
							`id`, 
							`ten_ngan_hang`,
							`link`, 
							`hinh_anh`
							) 
						VALUES (
							NULL, 
							'".$ten."',
							'".$link."',
							'".$anhminhhoa."'
							)";
						//echo $sql;
						}
			mysqli_query($ketnoi, $sql);
			echo '
			<script type="text/javascript">
				alert("Thêm mới ngân hàng thành công!!!");
				window.location.href="ngan_hang_quan_tri.php";
			</script>';
;?>
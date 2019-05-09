<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Credit - Loan &amp; Credit Company HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script>
            function calculate()
            {
                p = document.getElementById("amount").value;
                n = document.getElementById("nums").value;
                r = document.getElementById("rate").value;
                result = document.getElementById("result");
                
                result.innerHTML = "Tổng Lãnh:" + (p*n*r/100);
            }
        </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <?php
    include("base/top.php");
    ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Công Cụ</li>
                                <li class="breadcrumb-item active" aria-current="page">Tính lãi tiền gửi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <section class="contact-area section-padding-10-0">
    <div class="container">
        <div class="row">
    <!-- ========== Icon Boxes ========== -->
            <div class="col-12">
                <div class="elements-title mb-30">
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
    <section class="contact-area section-padding-2-0">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-15">
                        <h2>Tính lãi tiền gửi</h2>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!-- ##### Contact Area Start ##### -->
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <!-- ##### Google Maps ##### -->
        <div class="map-area"
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <form action="./admin/dang_nhap_thuc_hien.php" method="post">
                                <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name = "txtSoTienGui" class="form-control" id="amount" placeholder="Số tiền gửi:">
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kỳ hạn</button>
                                            <div class="dropdown-menu">
                                            <select name="txtLoaiKhachHang">
                                            <?php
                                            // Bước 1: Kết nối đến CSDL
                                            include("../config/dbconfig.php");
                                            $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

                                            //Bước 2: Hiển thị các dữ liệu trong bảng tblLienHe ra đây
                                            $sql = "
                                            SELECT * 
                                            FROM tbl_loai_khach_hang";
                                            $dulieu = mysqli_query($ketnoi, $sql);
                                            while ($row = mysqli_fetch_array($dulieu)) {
                                            ;?>
                                                <option value="<?php echo $row["loai_khach_hang_id"];?>"><?php echo $row["ten_loai_khach_hang"];?></option>
                                            <?php
                                            }
                                            ;?>
                                            </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name ="txtLaiSuat" class="form-control" id="rate" placeholder="Lãi suất gửi tiết kiệm:">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn credit-btn mt-30" onclick="calculate()">Kết Qủa</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <p>Lãi</p>
                                                <p>Tổng lãnh</p>
                                                <p id="result"></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-area section-padding-10-0">
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <!-- <h4 class="mb-50">Tính lãi khoản vay</h4> -->
<!--                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name = "txtSoTienGui" class="form-control" id="amount" placeholder="Số tiền gửi:">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name ="txtKyHan" class="form-control" id="nums" placeholder="Kỳ hạn:">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name ="txtLaiSuat" class="form-control" id="rate" placeholder="Lãi suất gửi tiết kiệm:">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <p id="result"></p>
                                            </div>
                                         </div> -->
                                         <div class="dropdown-menu">
                                  
                                            <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                            <label for="exampleDropdownFormPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                            <label class="form-check-label" for="dropdownCheck">
                                                Remember me
                                            </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">New around here? Sign up</a>
                                            <a class="dropdown-item" href="#">Forgot password?</a>
                                            </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button class="btn credit-btn mt-30" onclick="calculate()">Tính Lãi</button>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name ="txtLaiNhan" class="form-control" id="email" placeholder="Lãi:">
                                            </div>
                                        </div>
                                         -->    
                                        <!-- <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name= "txtTongLanh" class="form-control" id="subject" placeholder="Tổng Lãnh:">
                                                </div>
                                        </div> -->
                                      
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   <?php
        include("base/footer.php")
   ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
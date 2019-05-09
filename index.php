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
    <title>Web so sánh &amp;cung cấp dịch vụ so sánh lãi suất</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
      <!--Start Slide logo -->
      <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 250,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1110;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
<!--End Slide Logo -->
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

    <!-- ##### Header Area Start ##### -->
    <?php
    include("base/top.php");
    ;?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <?php
    include("base/slide.php")
    ;?>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Call To Action Start ###### -->
   <div class="container">
        <div class="credit-cool-facts-area " style="padding-top:20px;">
                <div class="row">

                    <div class="col-12 col-sm-6 col-lg-3 fixsize">
                        <!-- Single Cool Facts -->
                        <div class="single-cool-fact d-flex align-items-center mb-15">
                            <div class="scf-icon mr-15">
                                <i class="icon-piggy-bank"></i>
                            </div>
                            <div class="scf-text">
                                <h2><span class="text">Tiết Kiệm</span></h2>
                                <p>Nhiều Hơn</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 fixsize">
                        <!-- Single Cool Facts -->
                        <div class="single-cool-fact d-flex align-items-center mb-15">
                            <div class="scf-icon mr-15">
                                <i class="icon-coin"></i>
                            </div>
                            <div class="scf-text">
                                <h2><span class="text">Đầu Tư</span></h2>
                                <p>Thông Minh</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 fixsize">
                        <!-- Single Cool Facts -->
                        <div class="single-cool-fact d-flex align-items-center mb-15">
                            <div class="scf-icon mr-15">
                                <i class="icon-diamond"></i>
                            </div>
                            <div class="scf-text">
                                <h2><span class="text">Quyết Định</span></h2>
                                <p>Nhanh Hơn</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 fixsize">
                        <!-- Single Cool Facts -->
                        <div class="single-cool-fact d-flex align-items-center mb-15">
                            <div class="scf-icon mr-15">
                                <i class="icon-wallet"></i>
                            </div>
                            <div class="scf-text">
                                <h2><span class="text">Thủ Tục</span></h2>
                                <p>Đơn Giản</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
             </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center mb-15">
                    <div class="line"></div>
                    <h2>Lãi suất tiền gửi</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                    <thead >
                        <tr class ="table-primary">
                        <th scope="col">Ngân Hàng</th>
                        <th scope="col">KKH</th>
                        <th scope="col">1 Tháng</th>
                        <th scope="col">2 Tháng</th>
                        <th scope="col">3 Tháng</th>
                        <th scope="col">6 Tháng</th>
                        <th scope="col">9 Tháng</th>
                        <th scope="col">12 Tháng</th>
                        <th scope="col">18 Tháng</th>
                        <th scope="col">24 Tháng</th>
                        <th scope="col">36 Tháng</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>
                        <th scope="row">GPBANK</th>
                        <?php
                        include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql="SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%GPBANK%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr >
                        <tr>
                        <th scope="row">DongABank</th>
                 
                        <?php
                    
                        include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql="SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%DongA%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                            <tr>
                            <th scope="row"><img style ="width:50%, height:auto" src="">VietinBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql="SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%Vietin%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">OceanBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%Ocean%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">SeABank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%SeA%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">SaiGonBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%SaiGon%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">VietComBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%VietComBank%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">PVComBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%PVComBank%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">PGBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%PGBank%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">AgriBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%Agri%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                            <th scope="row">BaoVietBank</th>
                            <?php
                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql= "SELECT * 
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_ngan_hang Like '%BaoViet%'
                                LIMIT 0,10
                                ";   
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                            <td><?php echo $row["gia_tri"];?></td>
                            <?php
                            }
						    ;?>
                        </tr>
                    </tbody>
                </table>

                <br><br><br>
               <div class = "col-md-7">
                <table class="table">
                    <h3>Lãi suất tiền gửi cao nhất hôm nay</h3>
                    <thead>
                        <tr>
                        <th scope="col">Kỳ hạn</th>
                        <th scope="col">Ngân hàng</th>
                        <th scope="col">Lãi suất</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1 Tháng</td>

                        <?php
                        //SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1;

                                include("./config/dbconfig.php");
                                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                                $sql="SELECT ten_ngan_hang, gia_tri
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_lai_suat Like '1_T%'
                                ORDER BY gia_tri DESC
                                LIMIT 1
                                ";   
                                //echo $sql;
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						    ;?>
                        </tr>
                        <tr>
                        <td>2 Tháng</td>

                        <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_lai_suat Like '2_T%'
                                ORDER BY gia_tri DESC
                                LIMIT 1
                                ";   
                                //echo $sql;
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                        <tr>
                        <td>3 Tháng</td>

                        <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_lai_suat Like '3_T%'
                                ORDER BY gia_tri DESC
                                LIMIT 1
                                ";   
                                //echo $sql;
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
							;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                        <tr>
                        <td>6 Tháng</td>

                        <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                                FROM tbl_lai_suat_tiet_kiem
                                WHERE ten_lai_suat Like '6_T%'
                                ORDER BY gia_tri DESC
                                LIMIT 1
                                ";   
                                //echo $sql;
                                $dulieu = mysqli_query($ketnoi,$sql);
                                while ($row = mysqli_fetch_array($dulieu)){
						;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                        <tr>
                        <td>9 Tháng</td>
                        <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                            FROM tbl_lai_suat_tiet_kiem
                            WHERE ten_lai_suat Like '9_T%'
                            ORDER BY gia_tri DESC
                            LIMIT 1
                            ";   
                            //echo $sql;
                            $dulieu = mysqli_query($ketnoi,$sql);
                            while ($row = mysqli_fetch_array($dulieu)){
						;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                        <tr>
                        <td>12 Tháng</td>
                        <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                            FROM tbl_lai_suat_tiet_kiem
                            WHERE ten_lai_suat Like '12_T%'
                            ORDER BY gia_tri DESC
                            LIMIT 1
                            ";   
                            //echo $sql;
                            $dulieu = mysqli_query($ketnoi,$sql);
                            while ($row = mysqli_fetch_array($dulieu)){
						;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                        <tr>
                        <td>18 Tháng</td>
                        <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                            FROM tbl_lai_suat_tiet_kiem
                            WHERE ten_lai_suat Like '18_T%'
                            ORDER BY gia_tri DESC
                            LIMIT 1
                            ";   
                            //echo $sql;
                            $dulieu = mysqli_query($ketnoi,$sql);
                            while ($row = mysqli_fetch_array($dulieu)){
						;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                        <tr>
                        <td>24 Tháng</td>

                      <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                            FROM tbl_lai_suat_tiet_kiem
                            WHERE ten_lai_suat Like '24_T%'
                            ORDER BY gia_tri DESC
                            LIMIT 1
                            ";   
                            //echo $sql;
                            $dulieu = mysqli_query($ketnoi,$sql);
                            while ($row = mysqli_fetch_array($dulieu)){
						;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                        <tr>
                        <td>36 Tháng</td>
                        <?php
                        $sql="SELECT ten_ngan_hang, gia_tri
                            FROM tbl_lai_suat_tiet_kiem
                            WHERE ten_lai_suat Like '36_T%'
                            ORDER BY gia_tri DESC
                            LIMIT 1
                            ";   
                            //echo $sql;
                            $dulieu = mysqli_query($ketnoi,$sql);
                            while ($row = mysqli_fetch_array($dulieu)){
						;?>
                        <td><?php echo $row['ten_ngan_hang'] ?></td>
                        <td><?php echo $row['gia_tri'] ?></td>
                        <?php
                            }
						;?>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class = "col-md-5"> 
                   
                <h4>3 ngân hàng có lãi suất cao nhất</h4>
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Không kì hạn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">1 Tháng</a>
                            <a class="dropdown-item" href="#">2 Tháng</a>
                            <a class="dropdown-item" href="#">3 Tháng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- ##### Miscellaneous Area Start ###### -->
    <section class="miscellaneous-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <!-- Add Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                    </div>
                </div>

                <!-- Contact Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Section Heading -->
                        <div class="section-heading mb-50">
                            <div class="line"></div>
                            <h2>Liên hệ với chúng tôi</h2>
                        </div>
                        <!-- Contact Content -->
                        <div class="contact-content">
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/location.png" alt="">
                                </div>
                                <div class="text">
                                    <p> <br>Ngõ 12 Chùa Bộc Đống Đa Hà Nội</p>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/call.png" alt="">
                                </div>
                                <div class="text">
                                    <p>337-413-9538</p>
                                    <span>T2-T6 , 08.am - 17.pm</span>
                                </div>
                            </div>
                            <!-- Single Contact Content -->
                            <div class="single-contact-content d-flex align-items-center">
                                <div class="icon">
                                    <img src="img/core-img/message2.png" alt="">
                                </div>
                                <div class="text">
                                    <p>hotrowebsosanh@gmail.com</p>
                                    <span>Chúng tôi sẽ trả lời sớm nhất</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Section Heading -->
                        <div class="section-heading mb-50">
                            <div class="line"></div>
                            <h2>Tin tức mới nhất</h2>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/10.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span> 29/3/2019</span>
                                <a href="#">Lãi suất vay mua ô tô tháng 4</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Buiba</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> 29/3/2019</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/11.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span> 29/3/2019</span>
                                <a href="#">Lãi suất gửi tiết kiệm tháng 4</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Buiba</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> 29/3/2019</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <span> 29/3/2019</span>
                                <a href="#">Lãi suất vay mua nhà tháng 4</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Buiba</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> 29/3/2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ###### -->

    <!-- ##### Slide Logo Start ###### -->
    <div class="container">
        <div class="row">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:50%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="img/bidv.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/citibank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/hongleongbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/lienvietpostbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/mbbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/pvcombank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/shbbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/shinhanbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/standerd-chartered.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/techcombank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/tpbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/uob.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vibbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vietcombank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vietinbank.png" />
                    </div>
                    <div>
                        <img data-u="image" src="img/vpbank.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    <!-- ##### Slide Logo End ###### -->

    <!-- ##### Newsletter Area Start ###### -->
   <?php
        include('base/newsletter.php');
   ?>
    <!-- ##### Newsletter Area End ###### -->
    <!-- ##### Slide Logo Bank Start ###### -->
    
    <!-- ##### Slide Logo Bank End ###### -->
    <!-- ##### Footer Area Start ##### -->
    <?php
        include("base/footer.php");
    ;?>
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
<?php 
;?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Trang Quản Trị Web Di Động Việt</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php include("top.php");?>

            <!-- page content -->
            <div class="right_col" role="main">
              <!-- top tiles -->
              <div class="row tile_count">
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <!-- //tong so nguoi dung -->
                <?php
                 include("../config/dbconfig.php");
                 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                 $sql = "
                 SELECT count(id) as tongnguoidung
                 FROM tbl_nguoi_dung";
               $dulieu = mysqli_query($ketnoi, $sql);
               while ($row = mysqli_fetch_array($dulieu)) {
                ;?>
                  <span class="count_top"><i class="fa fa-user"></i> Tổng số thành viên</span>
                  <div class="count"><?php echo $row['tongnguoidung'] ;?></div>
                  <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <?php
               }
               ;?>
                <!-- tong so tin tuc -->
                <?php
                 include("../config/dbconfig.php");
                 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                 $sql = "
                 SELECT count(id) as tongtintuc
                 FROM tbl_tin_tuc";
               $dulieu = mysqli_query($ketnoi, $sql);
               while ($row = mysqli_fetch_array($dulieu)) {
                ;?>
                  <span class="count_top"><i class="fa fa-clock-o"></i> Tổng số tin tức</span>
                  <div class="count"><?php echo $row['tongtintuc'];?></div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                </div>
                <?php
               }
               ;?>
               <!-- tong so ngan hàng -->
                <?php
                 include("../config/dbconfig.php");
                 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                 $sql = "
                 SELECT count(id) as tongnganhang
                 FROM tbl_ngan_hang";
               $dulieu = mysqli_query($ketnoi, $sql);
               while ($row = mysqli_fetch_array($dulieu)) {
                ;?>
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Tổng số ngân hàng</span>
                  <div class="count green"><?php echo $row['tongnganhang'];?></div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <?php
               }
               ;?>
               <!-- tong so phan hoi -->
               <?php
                 include("../config/dbconfig.php");
                 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                 $sql = "
                 SELECT count(id) as tongphanhoi
                 FROM tbl_lien_he";
               $dulieu = mysqli_query($ketnoi, $sql);
               while ($row = mysqli_fetch_array($dulieu)) {
                ;?>
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Tống số yêu cầu tư vấn</span>
                  <div class="count"><?php echo $row['tongphanhoi'];?></div>
                  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                </div>
                <?php
               }
               ;?>
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                  <!-- tổng lượt truy cập -->
                  <?php
						//Mở và thống kê số lượt truy cập trong file txt
										$fp="../counter.txt";
										$fo= fopen($fp,'r');
										$fr=fread($fo, filesize($fp));
										$fr++;
										$fc= fclose($fo);
										//Mở và ghi lại số lượt bằng thuộc tính W, W++
										$fo= fopen($fp,'w');
										$fw=fwrite($fo, $fr);
										$fc= fclose($fo);
						      ?>
                  <span class="count_top"><i class="fa fa-user"></i> Tống số lượt truy cập</span>
                  <div class="count"><?php echo $fr?></div>
                  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i>Tổng số đơn hàng</span>
                  <div class="count">8</div>
                  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i>Doanh thu trong tháng</span>
                  <div class="count">500 tỷ</div>
                  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                </div>
              </div>
          
              <!-- /top tiles -->

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h1>Trang Web So Sánh Lãi Suất</h1>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Những Việc Cần Làm <small>Nhiệm vụ</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a href="cong_viec_cap_nhat.php"class="collapse-link">Cập nhật</a>
                        </li>
    
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <form action="cong_viec_cap_nhat.php" method="post">
                    <div class="x_content">
                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" name="<?php echo $row['cong_viec_id'];?>" class="flat"><?php echo $row['ten_cong_viec'];?></p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
                <!-- End to do list -->
                </div>
              </div>
            </div>
            <!-- /page content -->

            <?php include("bottom.php");?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>

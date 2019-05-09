            <div class="navbar nav_title" style="border: 0;"><a href="trang_quan_tri.php" class="site_title"><i class="icon-bank"></i><span>WEB SO SÁNH</span></a></div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/bui_ba.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <?php
              if(isset($_SESSION['tai_khoan']))
              {
                echo"Xin Chào".$_SESSION['tai_khoan'].",<a href='../dang_xuat.php'>Đăng xuất</a>";
              }
              else{
                echo"<a href='../sigup.php'>Đăng kí</a>";
              }
              // if (!isset($_SESSION['tai_khoan'])) {
              //     header("Location: dang_nhap.php");
              // }
              ;?>
                <!-- <span>Xin chào</span>
                <h2>BuiBa</h2> -->
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Thông Tin Chung</h3>
                <ul class="nav side-menu">
                  <li><a href="./trang_quan_tri.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
                  <li><a><i class="fa fa-edit"></i> Quản trị Tổng hợp <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="quan_tri_banner.php">Cập nhật Banner</a></li>
                      <li><a href="menu_quan_tri.php">Cập nhật Menu</a></li>
                      <li><a href="quan_tri_slide.php">Cập nhật Slide</a></li>
                      <li><a href="quan_tri_footer.php">Cập nhật Footer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Quản trị khách hàng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="khach_hang_them_moi.php">Tạo khách hàng mới</a></li>
                      <li><a href="khach_hang_quan_tri.php">Danh sách khách hàng</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Quản trị Tin tức <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="bai_viet_them_moi.php">Tạo bài viết mới</a></li>
                      <li><a href="bai_viet_quan_tri.php">Quản trị bài viết</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Quản trị ngân hàng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ngan_hang_them_moi.php">Thêm ngân hàng mới</a></li>
                      <li><a href="ngan_hang_quan_tri.php">Quản trị ngân hàng</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Quản trị Người dùng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="nguoi_dung_them_moi.php">Thêm người dùng mới</a></li>
                      <li><a href="nguoi_dung_quan_tri.php">Quản trị người dùng</a></li>
                    </ul>
                  </li>
                  <li><a href="quan_tri_binh_luan.php"><i class="fa fa-bar-chart-o"></i> Quản trị Bình luận</a></li>
                  <li><a href="quan_tri_lien_he.php"><i class="fa fa-bar-chart-o"></i> Quản trị Liên hệ</a></li>
                  <li><a href="email_quan_tri.php"><i class="fa fa-bar-chart-o"></i> Quản trị Email</a></li>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/bui_ba.jpg" alt="">BuiBa
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Hồ sơ</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Cài đặt</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Trợ giúp/a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i>Thoát</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <!-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Bùi Ba</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Hoàng Hạnh</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Thu Hằng</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Lan Lee</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span> -->
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Xem tất cả cảnh báo</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
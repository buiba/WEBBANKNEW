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

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Liên Hệ</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <!-- Logo -->
                        <a href="#" class="d-block mb-50"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Trang web của chúng tôi cung cấp cái nhìn tổng quan nhất về lãi suất tiền gửi trên thị trường</p>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact-advisor">
                            <h5>Liên hệ tư vấn viên</h5>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="advisor-info">
                                    <h6>Trịnh Lan Anh</h6>
                                    <span>Tư vấn viên</span>
                                    <p>+456 347 53433</p>
                                </div>
                            </div>
                            <!-- Single Advisor -->
                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/26.jpg" alt="">
                                </div>
                                <div class="advisor-info">
                                    <h6>Bùi Văn Ba</h6>
                                    <span>Tư vấn viên</span>
                                    <p>+456 347 53433</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5>Trụ Sở</h5>

                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="img/core-img/location.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Ngõ 12 Chùa Bộc Đống Đa Hà Nội</p>
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
                </div>
            </div>
        </div>


        <!-- ##### Google Maps ##### -->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.597833850266!2d105.82640181471488!3d21.008752186009225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac800f450807%3A0x419a49bcd94b693a!2sBanking+Academy!5e0!3m2!1sfr!2s!4v1557203343194!5m2!1sfr!2s" allowfullscreen></iframe>
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50">Gửi Yêu Cầu</h4>

                                <form action="./admin/lien_he_them_moi.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name ="HoTen" class="form-control" id="name" placeholder="Họ Tên">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name ="Email" class="form-control" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="phone" name ="DienThoai" class="form-control" id="email" placeholder="Điện Thoại">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea  name ="NoiDungPhanHoi" class="form-control" id="message" cols="30" rows="10" placeholder="Nội Dung Yêu Cầu"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn credit-btn mt-30" type="submit">Gửi</button>
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
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
        include("base/footer.php")
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
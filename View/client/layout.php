<?php

?>
<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta name="keywords" content="">
    <title>DKT Store</title>
    <meta name="description" content="DKT Store">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DKT Store">
    <meta property="og:image" content="public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
    <meta property="og:image:secure_url" content="public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="DKT Store">
    <link rel="canonical" href="index.html">
    <link rel="shortcut icon" href="public/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <link href='public/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <script src='public/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='public/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>

<body class="index">
    <div id="fb-root"></div>
    <!-- header -->
    <header id="header">
        <!-- top header -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
                    <?php
                        if (!$_SESSION["username"]) {
                            echo '<div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="account"><i class="fa fa-user"></i> Đăng nhập</a> <a href="account/register"><i class="fa fa-user-plus"></i> Đăng ký</a> </div>';
                        } else {
                            echo '<h5> $_SESSION["fullname"] </h5>';
                        }

                    ?>

                </div>
            </div>
        </div>
        <!-- end top header -->
        <!-- middle header -->
        <div class="mid-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.html"> <img src="public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                        <form method="get" action="search">
                            <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="query" class="input-control">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                        <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count">0</span> sản phẩm <i class="fa fa-caret-down"></i></a>
                            <div class="content-mini-cart">
                                <div class="has-items">
                                    <ul class="list-unstyled">
                                    </ul>
                                    <div class="total clearfix"> <span class="pull-left">Tổng tiền:</span> <span class="pull-right total-price">0₫</span> </div>
                                    <a href="checkout" class="button">Thanh toán</a>
                                </div>
                                <div class="no-item">
                                    <p style="text-align:left">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end middle header -->
        <!-- bottom header -->
        <div class="bottom-header">
            <div class="container">
                <div class="clearfix">
                    <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                        <li class="active"><a href="index.html">Trang chủ</a></li>
                        <li><a href="gioi-thieu">Giới thiệu</a></li>
                        <li><a href="gioi-thieu">Sản phẩm</a></li>
                        <li><a href="tin-tuc">Tin tức</a></li>
                        <li><a href="lien-he">Liên hệ</a></li>
                    </ul>
                    <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
                    <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="gioi-thieu">Giới thiệu</a></li>
                        <li><a href="collections/all">Sản phẩm</a>
                            <ul style="display:none">
                                <li><a href="san-pham-noi-bat">Sản phẩm nổi bật</a></li>
                                <li><a href="san-pham-khuyen-mai">Sản phẩm khuyến mãi</a></li>
                                <li><a href="dien-thoai-di-dong">Điện thoại di động</a></li>
                                <li><a href="laptop">Laptop</a></li>
                                <li><a href="tivi">Tivi</a></li>
                                <li><a href="tai-nghe">Tai nghe</a></li>
                                <li><a href="am-thanh">Âm thanh</a></li>
                                <li><a href="may-van-phong">Máy văn phòng</a></li>
                            </ul>
                        </li>
                        <li><a href="tin-tuc">Tin tức</a></li>
                        <li><a href="lien-he">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end bottom header -->
    </header>
    <!-- end header -->
    <div class="content">
        <div class="container">
            <h1 style="display:none;">DKT Store</h1>
            <!-- category product -->
            <div class="slideshow">
                <div class="row">
                    <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
                        <aside class="aside-category">
                            <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
                            <ul class="list-unstyled">
                                <li><a href="san-pham-noi-bat">Sản phẩm nổi bật</a></li>
                                <li><a href="san-pham-khuyen-mai">Sản phẩm khuyến mãi</a></li>
                                <li><a href="dien-thoai-di-dong">Điện thoại di động</a></li>
                                <li><a href="laptop">Laptop</a></li>
                                <li><a href="tivi">Tivi</a></li>
                                <li><a href="tai-nghe">Tai nghe</a></li>
                                <li><a href="am-thanh">Âm thanh</a></li>
                                <li><a href="may-van-phong">Máy văn phòng</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12">
                        <div class="owl-slider">
                            <div class="item">
                                <!-- ============================ -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active"> <img src="public/frontend/images/la.jpg" alt="Los Angeles"> </div>
                                        <div class="item"> <img src="public/frontend/images/slideshow1221b.jpg" alt="Los Angeles"> </div>
                                        <div class="item"> <img src="public/frontend/images/chicago.jpg" alt="Chicago"> </div>
                                        <div class="item"> <img src="public/frontend/images/ny.jpg" alt="New York"> </div>
                                    </div>

                                    <!-- Left and right controls -->
                                </div>
                                <!-- ============================ -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end category product -->
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <!-- end support -->
                    <div class="online_support block">
                        <div class="new_title">
                            <h2>Hỗ trợ trực tuyến</h2>
                        </div>
                        <div class="block-content">
                            <div class="sp_1">
                                <p>Tư vấn bán hàng 1</p>
                                <p>Mrs. Dung: <span>(04) 3786 8904</span></p>
                            </div>
                            <div class="sp_2">
                                <p>Tư vấn bán hàng 2</p>
                                <p>Mr. Tuấn: <span>(04) 3786 8904</span></p>
                            </div>
                            <div class="sp_mail">
                                <p>Email liên hệ</p>
                                <p><a href="mailto:support@mail.com">support@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end support online -->
                    <!-- hot news -->
                    <div class="home-blog">
                        <h2 class="title"> <span>Tin tức</span></h2>
                        <div class="row">
                            <div class="owl-home-blog owl-home-blog-sidebar">
                                <!-- list hot news -->
                                <div class="item">
                                    <div class="article"> <a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/ip6s3f8a.png?v=1469340252480" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                        <div class="info">
                                            <h3><a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau">Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?</a></h3>
                                            <p class="time">11/01/2016</p>
                                            <p class="desc"> Không ai có thể phủ nhận sức hút từ vẻ đẹp của những chiếc điện thoại của hãng Apple. Đặc biệt hơn, khi mà ở thời điểm hiện tại, giá iPhone 6s và iPhone 6s Plus đang giảm và dần dần trở nên vừa vặn với túi tiền của...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end list hot news -->
                                <!-- list hot news -->
                                <div class="item">
                                    <div class="article"> <a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/tvlg22a8.jpg?v=1469340975457" alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" class="img-responsive"> </a>
                                        <div class="info">
                                            <h3><a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016</a></h3>
                                            <p class="time">08/01/2016</p>
                                            <p class="desc"> LG vừa giới thiệu loạt TV OLED 4K mới tại Triển lãm CES 2016, trong đó tiêu biểu là 2 mẫu TV LG OLED 77/65-inch G6 và 65/55-inch E6 có tích hợp tính năng HDR.

                                                Theo đó, 8 mẫu TV OLED 2016 đều được tích hợp những công...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end list hot news -->
                                <!-- list hot news -->
                                <div class="item">
                                    <div class="article"> <a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/1lapd47b.jpg?v=1469343007973" alt="MSI ra mắt loạt máy tính " khủng" tại CES 2016" title="MSI ra mắt loạt máy tính " khủng" tại CES 2016" class="img-responsive"> </a>
                                        <div class="info">
                                            <h3><a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016">MSI ra mắt loạt máy tính "khủng" tại CES 2016</a></h3>
                                            <p class="time">08/01/2016</p>
                                            <p class="desc"> Tại triển lãm CES năm nay, MSI đã cho ra mắt loạt sản phẩm máy tính mới dành cho game thủ và giới thiết kế với nhiều nâng cấp mạnh về cấu hình, công nghệ.

                                                Theo TechReport, loạt máy tính mới của MSI trình làng tại CES gồm...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end list hot news -->
                                <!-- list hot news -->
                                <div class="item">
                                    <div class="article"> <a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/llv7032.jpg?v=1469340069420" alt="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" title="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" class="img-responsive"> </a>
                                        <div class="info">
                                            <h3><a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong">Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng</a></h3>
                                            <p class="time">08/01/2016</p>
                                            <p class="desc"> Về thiết kế, Lenovo Y70 Touch trang bị bàn phím backlit, màn hình cảm ứng 17 inch cùng công nghệ nhận dạng khuôn mặt VeriFace Pro. Cổng HDMI-out để truyền dẫn nội dung chất lượng cao tới màn hình lớn hơn, đồng thời tích hợp chuẩn Wi-Fi mới nhất....</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end list hot news -->
                                <!-- list hot news -->
                                <div class="item">
                                    <div class="article"> <a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/tainghe6d96.jpg?v=1469340188910" alt="Trải nghiệm dòng tai nghe H.ear mới của Sony" title="Trải nghiệm dòng tai nghe H.ear mới của Sony" class="img-responsive"> </a>
                                        <div class="info">
                                            <h3><a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony">Trải nghiệm dòng tai nghe H.ear mới của Sony</a></h3>
                                            <p class="time">08/01/2016</p>
                                            <p class="desc"> Dòng sản phẩm mới này của Sony mang 1 slogan mới của hãng là "Hear Your Color", tức là Sony muốn đem những gam màu rực rỡ lên các sản phẩm được gắn mác "Hi-res", vốn là các sản phẩm hỗ trợ âm thanh có độ phân giải cao....</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end list hot news -->
                                <!-- list hot news -->
                                <div class="item">
                                    <div class="article"> <a href="bai-viet-mau" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/reviewsbeec.jpg?v=1469340222383" alt="iPhone 7 sẽ lại là một bước " cải lùi" về thiết kế của Apple" title="iPhone 7 sẽ lại là một bước " cải lùi" về thiết kế của Apple" class="img-responsive"> </a>
                                        <div class="info">
                                            <h3><a href="bai-viet-mau">iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của Apple</a></h3>
                                            <p class="time">29/05/2015</p>
                                            <p class="desc"> Không còn jack cắm tai nghe 3,5 mm trên iPhone là một phần trong nỗ lực "nhốt" người dùng trong thế giới của riêng mình đến từ Apple.
                                                Vài năm trở lại đây, các tin đồn về iPhone thường tỏ ra khá chính xác. Thực tế này không khỏi...</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end list hot news -->
                            </div>
                        </div>
                    </div>
                    <!-- end hot news -->
                    <div class="statistics block">
                        <div id="bw-statistics"></div>
                    </div>
                    <div class="fanpage block hidden-sm hidden-xs"> face book fanpage </div>
                </div>
                <div class="col-xs-12 col-md-9">
                    <!-- main -->
                    <div class="special-collection">
                        <div class="tabs-container">
                            <div class="clearfix">
                                <h2>Sản phẩm Hot</h2>
                            </div>
                        </div>
                        <div class="tabs-content row">
                            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
                                <div class="clearfix">

                                    <!-- box product -->
                                    <div class="col-xs-6 col-md-3 col-sm-6 ">
                                        <div class="product-grid" id="product-1168979">
                                            <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="public/frontend/thumb/medium/100/047/633/products/66s706a.jpg?v=1469341370363" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
                                            <div class="info">
                                                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                                                <div class="action-btn">
                                                    <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                                        <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end box product -->
                                    <!-- box product -->
                                    <div class="col-xs-6 col-md-3 col-sm-6 ">
                                        <div class="product-grid" id="product-1168979">
                                            <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="public/frontend/thumb/medium/100/047/633/products/66s706a.jpg?v=1469341370363" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
                                            <div class="info">
                                                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                                                <div class="action-btn">
                                                    <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                                        <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end box product -->
                                    <!-- box product -->
                                    <div class="col-xs-6 col-md-3 col-sm-6 ">
                                        <div class="product-grid" id="product-1168979">
                                            <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="public/frontend/thumb/medium/100/047/633/products/66s706a.jpg?v=1469341370363" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
                                            <div class="info">
                                                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                                                <div class="action-btn">
                                                    <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                                        <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end box product -->
                                    <!-- box product -->
                                    <div class="col-xs-6 col-md-3 col-sm-6 ">
                                        <div class="product-grid" id="product-1168979">
                                            <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="public/frontend/thumb/medium/100/047/633/products/66s706a.jpg?v=1469341370363" title="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" alt="APPLE IPHONE 6S PLUS ROSE GOLD 128GB" class="img-responsive"></a> </div>
                                            <div class="info">
                                                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb">APPLE IPHONE 6S PLUS ROSE GOLD 128GB</a></h3>
                                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> 23.000.000₫ </span> </span> </p>
                                                <div class="action-btn">
                                                    <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                                        <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end box product -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-tab-collections" style="margin-top:0px;">
                        <div class="tabs-container">
                            <ul class="list-unstyled">
                                <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
                                        <h2>Sản phẩm nổi bật</h2>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="tabs-content row">
                            <div id="content-taba4" class="content-tab content-tab-proindex">
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142079">
                                        <div class="image"> <a href="laptop-asus-zenbook-ux305f-fc089h"><img src="public/frontend/thumb/medium/100/047/633/products/may-tinh-xach-tay-asus-zenbook-ux305f-fc089h-01f474.jpg?v=1451965438913" title="Laptop Asus Zenbook UX305F-FC089H" alt="Laptop Asus Zenbook UX305F-FC089H" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-asus-zenbook-ux305f-fc089h">Laptop Asus Zenbook UX305F-FC089H</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 17.990.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142079">
                                                    <input type="hidden" name="variantId" value="1777262" />
                                                    <button class="button add-cart">mua hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142075">
                                        <div class="image"> <a href="laptop-acer-aspire-e5-411"><img src="public/frontend/thumb/medium/100/047/633/products/acer-e5-411-c2pe-010d0b.jpg?v=1451965433810" title="Laptop Acer Aspire E5-411 N2930 14 inch" alt="Laptop Acer Aspire E5-411 N2930 14 inch" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-acer-aspire-e5-411">Laptop Acer Aspire E5-411 N2930 14 inch</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 5.690.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142075">
                                                    <a href="laptop-acer-aspire-e5-411" class="button">Chọn sản phẩm</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142072">
                                        <div class="image"> <a href="laptop-asus-transformer-book-flip-tp550la-cj040h"><img src="public/frontend/thumb/medium/100/047/633/products/tp550ld-cj084h-01_rabz-50_ieap-cm_dv21-0ffd16.jpg?v=1451965559993" title="Laptop Asus Transformer Book Flip TP550LA CJ040H" alt="Laptop Asus Transformer Book Flip TP550LA CJ040H" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-asus-transformer-book-flip-tp550la-cj040h">Laptop Asus Transformer Book Flip TP550LA CJ040H</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 10.590.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142072">
                                                    <input type="hidden" name="variantId" value="1777253" />
                                                    <button class="button add-cart">mua hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142071">
                                        <div class="image"> <a href="laptop-hp-probook-440-g2-k9r17pa"><img src="public/frontend/thumb/medium/100/047/633/products/hp_probook_440_01666c.jpg?v=1451965466157" title="Laptop HP Probook 440 G2 K9R17PA" alt="Laptop HP Probook 440 G2 K9R17PA" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-hp-probook-440-g2-k9r17pa">Laptop HP Probook 440 G2 K9R17PA</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 14.790.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142071">
                                                    <input type="hidden" name="variantId" value="1777245" />
                                                    <button class="button add-cart">mua hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142070">
                                        <div class="image"> <a href="laptop-dell-vostro-14-5000-series"><img src="public/frontend/thumb/medium/100/047/633/products/dell_vostro_14_5480_012c85.jpg?v=1451965473487" title="Laptop Dell Vostro 14 5000 Series" alt="Laptop Dell Vostro 14 5000 Series" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-dell-vostro-14-5000-series">Laptop Dell Vostro 14 5000 Series</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 11.510.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142070">
                                                    <input type="hidden" name="variantId" value="1777249" />
                                                    <button class="button add-cart">mua hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142069">
                                        <div class="image"> <a href="laptop-acer-nitro-vn7-571g-550v"><img src="public/frontend/thumb/medium/100/047/633/products/may-tin-xach-tay-acer-nitro-vn7-571g-016343.jpg?v=1451965447287" title="Laptop Acer Nitro VN7-571G-550V" alt="Laptop Acer Nitro VN7-571G-550V" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-acer-nitro-vn7-571g-550v">Laptop Acer Nitro VN7-571G-550V</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 17.000.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142069">
                                                    <input type="hidden" name="variantId" value="1777246" />
                                                    <button class="button add-cart">mua hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142068">
                                        <div class="image"> <a href="laptop-lenovo-ideapad-flex-2"><img src="public/frontend/thumb/medium/100/047/633/products/000000000010021355-may-tinh-xach-tay-lenovo-ideapad-flex-2-14e284.jpg?v=1451965444490" title="Laptop Lenovo IdeaPad Flex 2 14 inch" alt="Laptop Lenovo IdeaPad Flex 2 14 inch" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-lenovo-ideapad-flex-2">Laptop Lenovo IdeaPad Flex 2 14 inch</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 13.990.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142068">
                                                    <input type="hidden" name="variantId" value="1777247" />
                                                    <button class="button add-cart">mua hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->
                                <!-- box product -->
                                <div class="col-xs-6 col-sm-4 col-md-3 ">
                                    <div class="product-grid product-loop" id="product-1142067">
                                        <div class="image"> <a href="laptop-dell-latitude-3440-l4i5h005"><img src="public/frontend/thumb/medium/100/047/633/products/dell-l3540b-014089.jpg?v=1451965440063" title="Laptop Dell Latitude 3440 - L4I5H005" alt="Laptop Dell Latitude 3440 - L4I5H005" class="img-responsive"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a href="laptop-dell-latitude-3440-l4i5h005">Laptop Dell Latitude 3440 - L4I5H005</a></h3>
                                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> 13.600.000₫ </span> </span> </p>
                                            <div class="action-btn">
                                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142067">
                                                    <input type="hidden" name="variantId" value="1777261" />
                                                    <button class="button add-cart">mua hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box product -->

                            </div>
                        </div>
                    </div>
                    <!-- end main -->
                </div>
            </div>
            <!-- adv -->
            <div class="widebanner"> <a href="#"><img src="public/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
            <!-- end adv -->
            <!-- home news -->
            <div class="home-blog">
                <h2 class="title"> <span>Tin tức</span></h2>
                <div class="row">
                    <div class="owl-home-blog owl-home-blog-bottompage">
                        <div class="item">
                            <div class="article"> <a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/ip6s3f8a.png?v=1469340252480" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                <div id="not_image" class="info">
                                    <h3><a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau">Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?</a></h3>
                                    <p class="time">11/01/2016</p>
                                    <p class="desc">
                                    <p style="text-align: justify;">Không ai có thể phủ nhận sức hút từ vẻ đẹp của những chiếc điện thoại của hãng Apple. Đặc biệt hơn, khi mà ở thời điểm hiện tại, giá iPhone 6s và iPhone 6s Plus đang...</p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="article"> <a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/tvlg22a8.jpg?v=1469340975457" alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" class="img-responsive"> </a>
                                <div id="not_image" class="info">
                                    <h3><a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016</a></h3>
                                    <p class="time">08/01/2016</p>
                                    <p class="desc">
                                    <p style="text-align: justify;">LG vừa giới thiệu loạt TV OLED 4K mới tại Triển lãm CES 2016, trong đó tiêu biểu là 2 mẫu TV LG OLED 77/65-inch G6 và 65/55-inch E6 có tích hợp tính năng HDR.</p>
                                    ...
                                    </p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="article"> <a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/1lapd47b.jpg?v=1469343007973" alt="MSI ra mắt loạt máy tính " khủng" tại CES 2016" title="MSI ra mắt loạt máy tính " khủng" tại CES 2016" class="img-responsive"> </a>
                                <div id="not_image" class="info">
                                    <h3><a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016">MSI ra mắt loạt máy tính "khủng" tại CES 2016</a></h3>
                                    <p class="time">08/01/2016</p>
                                    <p class="desc">
                                    <p style="text-align: justify;">Tại triển lãm CES năm nay, MSI đã cho ra mắt loạt sản phẩm máy tính mới dành cho game thủ và giới thiết kế với nhiều nâng cấp mạnh về cấu hình, công nghệ.</p>
                                    <p ... </p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="article"> <a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/llv7032.jpg?v=1469340069420" alt="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" title="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" class="img-responsive"> </a>
                                <div id="not_image" class="info">
                                    <h3><a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong">Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng</a></h3>
                                    <p class="time">08/01/2016</p>
                                    <p class="desc">
                                    <p style="text-align: justify;">Về thiết kế, Lenovo Y70 Touch trang bị bàn phím backlit, màn hình cảm ứng 17 inch cùng công nghệ nhận dạng khuôn mặt VeriFace Pro. Cổng HDMI-out để truyền dẫn nội du...</p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="article"> <a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/tainghe6d96.jpg?v=1469340188910" alt="Trải nghiệm dòng tai nghe H.ear mới của Sony" title="Trải nghiệm dòng tai nghe H.ear mới của Sony" class="img-responsive"> </a>
                                <div id="not_image" class="info">
                                    <h3><a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony">Trải nghiệm dòng tai nghe H.ear mới của Sony</a></h3>
                                    <p class="time">08/01/2016</p>
                                    <p class="desc">
                                    <p style="text-align: justify;">Dòng sản phẩm mới này của Sony mang 1 slogan mới của hãng là "Hear Your Color", tức là Sony muốn đem những gam màu rực rỡ lên các sản phẩm được gắn mác "Hi-res", vốn...</p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="article"> <a href="bai-viet-mau" class="image"> <img src="public/frontend/thumb/large/100/047/633/articles/reviewsbeec.jpg?v=1469340222383" alt="iPhone 7 sẽ lại là một bước " cải lùi" về thiết kế của Apple" title="iPhone 7 sẽ lại là một bước " cải lùi" về thiết kế của Apple" class="img-responsive"> </a>
                                <div id="not_image" class="info">
                                    <h3><a href="bai-viet-mau">iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của Apple</a></h3>
                                    <p class="time">29/05/2015</p>
                                    <p class="desc">
                                    <p style="text-align: justify;">Không còn jack cắm tai nghe 3,5 mm trên iPhone là một phần trong nỗ lực "nhốt" người dùng trong thế giới của riêng mình đến từ Apple.<br />
                                        Vài năm trở lại đây, các...</p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end home news -->
        </div>
    </div>
    <div class="privacy">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
                    <div class="info">
                        <h3>Giao hàng miễn phí</h3>
                        <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
                    <div class="info">
                        <h3>Khuyến mại</h3>
                        <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
                    <div class="info">
                        <h3>Hoàn trả lại tiền</h3>
                        <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <h3>Về chúng tôi</h3>
                        <ul class="list-unstyled">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li><a href="gioi-thieu">Giới thiệu</a></li>
                            <li><a href="tin-tuc">Tin tức</a></li>
                            <li><a href="gioi-thieu">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h3>Hướng dẫn</h3>
                        <ul class="list-unstyled">
                            <li><a href="huo-ng-da-n-mua-ha-ng">Hướng dẫn mua hàng</a></li>
                            <li><a href="huong-dan">Giao nhận và thanh toán</a></li>
                            <li><a href="do-i-tra-va-ba-o-ha-nh">Đổi trả và bảo hành</a></li>
                            <li><a href="account/register">Đăng ký thành viên</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h3>Chính sách</h3>
                        <ul class="list-unstyled">
                            <li><a href="chinh-sach">Chính sách thanh toán</a></li>
                            <li><a href="chi-nh-sa-ch-va-n-chuye-n">Chính sách vận chuyển</a></li>
                            <li><a href="chi-nh-sa-ch-do-i-tra">Chính sách đổi trả</a></li>
                            <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Chính sách bảo hành</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h3>Điều khoản</h3>
                        <ul class="list-unstyled">
                            <li><a href="dieu-khoan">Điều khoản sử dụng</a></li>
                            <li><a href="die-u-khoa-n-giao-di-ch">Điều khoản giao dịch</a></li>
                            <li><a href="di-ch-vu-tie-n-i-ch">Dịch vụ tiện ích</a></li>
                            <li><a href="quye-n-so-hu-u-tri-tue">Quyền sở hữu trí tuệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="payments-method"> <img src="public/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5"> © Bản quyền thuộc về Avent Team</div>
                    <div class="col-xs-12 col-sm-7">
                        <ul class="list-unstyled">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li><a href="gioi-thieu">Giới thiệu</a></li>
                            <li><a href="collections/all">Sản phẩm</a></li>
                            <li><a href="tin-tuc">Tin tức</a></li>
                            <li><a href="lien-he">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src='public/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
    <div class="ajax-error-modal modal">
        <div class="modal-inner">
            <div class="ajax-error-title">Lỗi</div>
            <div class="ajax-error-message"></div>
        </div>
    </div>
    <div class="ajax-success-modal modal">
        <div class="overlay"></div>
        <div class="content col-xs-12">
            <div class="ajax-left"> <img class="ajax-product-image" alt="&nbsp;" src="#" style="max-width:65px; max-height:100px" /> </div>
            <div class="ajax-right">
                <p class="ajax-product-title"></p>
                <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> Đã được thêm vào giỏ hàng.</p>
                <div class="actions">
                    <button class="button" onclick="window.location='cart'">Đi tới giỏ hàng</button>
                    <button class="button" onclick="window.location='checkout'">Thanh toán</button>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a>
        </div>
    </div>
</body>

</html>
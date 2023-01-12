<?php
    $rou = $route;


?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html en="vi">
<head>
    <title>DKT Store</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">

    <link rel="canonical" href="index.html">
    <link rel="shortcut icon"
          href="../../public/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361"
          type="image/x-icon"/>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='../../public/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <script src='../../public/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361'
            type='text/javascript'></script>
    <script src='../../public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361'
            type='text/javascript'></script>
    <script src='../../public/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body class="index">
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1780127515631166";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<!-- header -->
<header id="header">
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
                <?php
                    if (!isset($_SESSION["username"])) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="?page=login"><i class="fa fa-user"></i> Đăng nhập</a> <a href="?page=register"><i class="fa fa-user-plus"></i> Đăng ký</a> </div>
                <?php } else { ?>

                <div style="display: flex; justify-content: end" class="col-xs-12 col-sm-6 col-md-6 customer"> <p><b><?php echo $_SESSION["username"] ?></b></p> &nbsp; | &nbsp; <a href="?page=logout"><i class="fa fa-user"></i> Đăng xuất</a> </div>
                <?php } ?>
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
                    <form method="GET" action="search">
                        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="query" class="input-control">
                        <button  type="submit"> <i class="fa fa-search"></i> </button>
                    </form>
                </div>
                <?php
                if (isset($_SESSION["username"])) {
                    $db = new Database();
                    $usernameValid = $_SESSION["username"];
                    $queryGetUserByUsername = "SELECT * FROM `tbl_user` u WHERE u.c_username = '$usernameValid' ";
                    $result = mysqli_query($db->connection, $queryGetUserByUsername);
                    $user = null;
                    if ($result) {
                        while ($data = mysqli_fetch_object($result)) {
                            $user = $data;
                        }
                    }
                    $userId = $user->pk_user_id;
                    $querySelectOrder = "SELECT * FROM `tbl_order` o WHERE o.customer_id = $userId";
                    $resultOrder = mysqli_query($db->connection, $querySelectOrder);
                    $orders = array();

                    if ($resultOrder) {
                        while ($data = mysqli_fetch_array($resultOrder)) {
                            $orders = $data;
                        }
                    }
                    $sumPrice = 9999;
                    /*foreach ($orders as $order ) {
                        $sumPrice += floatval($order["gia"]);
                    }*/
                ?>
                    <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                        <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count"><?php echo count($orders) ?></span> sản phẩm <i class="fa fa-caret-down"></i></a>
                            <div class="content-mini-cart">
                                <div class="has-items">
                                    <ul class="list-unstyled">
                                    </ul>
                                    <div class="total clearfix"> <span class="pull-left">Tổng tiền:</span> <span class="pull-right total-price"><?php echo $sumPrice ?></span> </div>
                                    <a href="checkout" class="button">Thanh toán</a> </div>
                                <div class="no-item">
                                    <p style="text-align:left">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- end middle header -->
    <!-- bottom header -->
    <div class="bottom-header">
        <div class="container">
            <div class="clearfix">
                <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                    <?php if($rou == "home") { ?> <li class="active"><a href="index.html">Trang chủ</a></li> <?php } else { ?> <li class=""><a href="index.html">Trang chủ</a></li> <?php } ?>
                    <?php if($rou == "gioi-thieu") { ?> <li class="active" ><a href="introduction">Giới thiệu</a></li> <?php } else { ?> <li class="" ><a href="introduction">Giới thiệu</a></li> <?php } ?>
                    <?php if($rou == "tin-tuc") { ?> <li class="active" ><a href="news">Tin tức</a></li> <?php } else { ?>  <li class="" ><a href="news">Tin tức</a></li> <?php } ?>
                    <?php if($rou == "contact") { ?> <li class="active" ><a href="contact">Liên hệ</a></li> <?php } else { ?> <li class="" ><a href="contact">Liên hệ</a></li> <?php } ?>
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

        <div class="row">
            <div class="col-xs-12 col-md-3">
                <!-- category product -->
                <?php
                    if (file_exists("Controller/Client/categories.php")) {
                        include "Controller/Client/categories.php";
                    }
                ?>
                </aside>
                <!-- end category product -->
                <!-- end support -->
                <div class="online_support block">
                    <div class="new_title">
                        <h2>Hỗ trợ trực tuyến</h2>
                    </div>
                    <div class="block-content">
                        <div class="sp_1">
                            <p>Tư vấn bán hàng 1</p>
                            <p>Mrs. Dung: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p>Tư vấn bán hàng 2</p>
                            <p>Mr. Tuấn: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p>Email liên hệ</p>
                            <p>support@mail.com</p>
                        </div>
                    </div>
                </div>
                <!-- end support online -->
                <!-- hot news -->
                <div class="home-blog">
                    <?php
                        if (file_exists("Controller/Client/hotnew.php"))  {
                            include  "Controller/Client/hotnew.php";
                    }
                    ?>
                <!-- end hot news -->
                <!-- adv -->
                <img src="../../public/frontend/images/banner03d5.jpg">
                <!-- end adv -->

            </div>
            <div class="col-xs-12 col-md-9">
                <!-- main -->
                <!--Slider banner -->
                <?php
                    if (file_exists("Controller/Client/slideBanner.php")) {
                        include "Controller/Client/SlideBanner.php";
                    }
                ?>
                <!--End Slider banner -->
                <!-- ============================ -->
                <!--Content -->

                <?php
                        switch ($rou) {
                            case 'home':
                                if (file_exists("Controller/Client/content_layout.php"))
                                    include "Controller/Client/content_layout.php";
                                break;
                            case 'search':
                                if (file_exists("Controller/Client/search.php"))
                                    include "Controller/Client/search.php";
                                break;
                            case 'product':
                                if (file_exists("Controller/Client/productDetail.php"))
                                    include "Controller/Client/productDetail.php";
                                break;
                            case 'categories':
                                if (file_exists("Controller/Client/products.php"))
                                    include "Controller/Client/products.php";
                                break;
                            case 'gioi-thieu':
                                if (file_exists("Controller/Client/gioiThieu.php"))
                                    include "Controller/Client/gioiThieu.php";
                                break;
                            case 'contact':
                                if (file_exists("Controller/Client/contact.php"))
                                    include "Controller/Client/contact.php";
                                break;
                            case 'tin-tuc':
                                if (file_exists("Controller/Client/tinTuc.php"))
                                    include "Controller/Client/tinTuc.php";
                                break;
                            case 'login':
                                if (file_exists("Controller/admin/login.php"))
                                    include "Controller/admin/login.php";
                                break;
                            case 'register':
                                if (file_exists("Controller/admin/register.php"))
                                    include "Controller/admin/register.php";
                                break;
                            case 'logout':
                                if (file_exists("Controller/admin/logout.php"))
                                    include "Controller/admin/logout.php";
                                break;
                            case '404':
                                echo "Trang không tồn tại !";
                                break;
                            default:
                                break;

                    }
                ?>

                <!-- Hot product -->
                <?php
                //if (file_exists("Controller/Client/hotProduct.php"))
                    //include "Controller/Client/hotProduct.php";
                ?>

                <!-- Featured product -->


                <?php
                    //if (file_exists("Controller/Client/featuredProduct.php")) {
                        //include  "Controller/Client/featuredProduct.php";
                    //}
                ?>

                <!--End content -->


                <!-- end main -->
            </div>

        </div>
            <!-- adv -->
            <div class="widebanner"> <a href="#"><img src="public/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
            <!-- end adv -->
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
        </footer>>
</div>


<script src='../../public/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361'
        type='text/javascript'></script>
<div class="ajax-error-modal modal">
    <div class="modal-inner">
        <div class="ajax-error-title">Lỗi</div>
        <div class="ajax-error-message"></div>
    </div>
</div>
<div class="ajax-success-modal modal">
    <div class="overlay"></div>
    <div class="content col-xs-12">
        <div class="ajax-left"><img class="ajax-product-image" alt="&nbsp;" src="#"
                                    style="max-width:65px; max-height:100px"/></div>
        <div class="ajax-right">
            <p class="ajax-product-title"></p>
            <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> Đã được thêm vào giỏ
                hàng.</p>
            <div class="actions">
                <!--                <button class="button" onclick="window.location='cart'">Đi tới giỏ hàng</button>-->
                <!--                <button class="button" onclick="window.location='checkout'">Thanh toán</button>-->
            </div>
        </div>
        <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a></div>
</div>

</body>
</html>

<?php ob_end_flush(); ?>

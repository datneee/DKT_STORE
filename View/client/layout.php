<?php
if (isset($_SESSION["username"])) {
    $db = new Database();
    $user_email = $_SESSION["username"];
    $queryGetUserByUsername = "SELECT * FROM `tbl_customer` u WHERE u.email = '$user_email' ";
    $result = mysqli_query($db->connection, $queryGetUserByUsername);
    $user = null;
    if ($result) {
        while ($data = mysqli_fetch_object($result)) {
            $user = $data;
        }
    }
    $userId = $user->customer_id;
    $querySelectOrder = "SELECT * FROM `tbl_order` o JOIN `tbl_order_detail` d ON o.order_id = d.order_id JOIN `tbl_product` p ON d.fk_product_id = p.pk_product_id WHERE o.customer_id = $userId GROUP BY d.fk_product_id";
    $resultOrder = mysqli_query($db->connection, $querySelectOrder);
    $ordersDetail = array();

    if ($resultOrder) {
        while ($data = mysqli_fetch_array($resultOrder)) {
            $ordersDetail[] = $data;
        }
    }


    $method = isset($_GET["action"]) ? $_GET["action"] : '';
    $idWillDelete = isset($_GET["productId"]) ? $_GET["productId"] : '';
    $orderIdWillDelete = isset($_GET["orderId"]) ? $_GET["orderId"] : '';

    if ($method == "deleteCartItem" && $idWillDelete && $orderIdWillDelete) {
        $queryDeleteCartItem = "DELETE FROM `tbl_order_detail` od WHERE od.fk_product_id = $idWillDelete AND od.order_id = $orderIdWillDelete";

        $result = mysqli_query($db->connection, $queryDeleteCartItem);
        if ($result) {
            header("location:index.php");
        }
    }
    mysqli_close($db->connection);
}


?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html en="vi">
<head>
    <title>DKT Store</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.css">

    <link rel="canonical" href="home">
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
<header  id="header">
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
                <?php
                if (! isset($_SESSION["username"])) {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="?page=login"><i class="fa fa-user"></i> Đăng nhập</a> <a href="?page=register"><i class="fa fa-user-plus"></i> Đăng ký</a> </div>
                <?php } else { ?>

                    <div style="display: flex; justify-content: end" class="col-xs-12 col-sm-6 col-md-6 customer"><p style="cursor: pointer" ><a href="?page=order" style="text-decoration: none" class="btn-link"><b>Đơn hàng</b></a></p> &nbsp; |  <p><b><?php echo $user->hovaten ?></b></p> &nbsp; | &nbsp; <a href="?page=logout"><i class="fa fa-user"></i> Đăng xuất</a> </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- end top header -->
    <!-- middle header -->
    <div class="mid-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="home"> <img src="public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
                <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                    <form method="GET" action="search">
                        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="query" class="input-control">
                        <button  type="submit"> <i class="fa fa-search"></i> </button>
                    </form>
                </div>
                <?php if (isset($_SESSION["username"])) { ?>
                    <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                        <div class="wrapper-mini-cart"> <span class="icon"><a href="cart"><i style="color: #ffff" class="fa fa-shopping-cart"></i></a></span> <a href="cart"> <span class="mini-cart-count"><?php if (isset($_SESSION['carts'])) { echo count($_SESSION['carts']); } else echo 0;?></span> sản phẩm <i class="fa fa-caret-down"></i></a>
                            <div class="content-mini-cart">
                                <?php if( isset($_SESSION['carts']) && count($_SESSION['carts']) > 0) {?>
                                    <div class="has-items">
                                        <ul class="list-unstyled">
                                            <?php
                                            foreach ($_SESSION['carts'] as $cartItem) {
                                                ?>
                                                <li class="clearfix" id="item-1853038">
                                                    <div class="image"> <a href="index.php?controller=product_detail&id=5"> <img alt="Sản phẩm 2" src="public/upload/product/<?php echo $cartItem["c_img"] ?>" title="Sản phẩm 2" class="img-responsive"> </a> </div>
                                                    <div class="info">
                                                        <h3><a href="index.php?product=<?php echo $cartItem['pk_product_id'] ?>"><?php echo $cartItem["c_name"]?></a></h3>
                                                        <p><?php echo $cartItem["quantity"] . ' x ' . $cartItem["c_price"]?>đ</p>
                                                    </div>
                                                    <div> <a href="cart?action=delete&code=<?php echo $cartItem["pk_product_id"] ?>"> <i class="fa fa-times"></i></a> </div>

                                                </li>
                                            <?php  } ?>
                                        </ul>
                                        <a href="checkout" class="button">Thanh toán</a> </div>
                                <?php } else { ?>
                                    <div class="no-item">
                                        <p style="text-align:left">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                                    </div>
                                <?php } ?>
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
                    <?php if($controller == "/home.php") { ?> <li class="active"><a href="home">Trang chủ</a></li> <?php } else { ?> <li class=""><a href="home">Trang chủ</a></li> <?php } ?>
                    <?php if($controller == "/introduction.php") { ?> <li class="active" ><a href="introduction">Giới thiệu</a></li> <?php } else { ?> <li class="" ><a href="introduction">Giới thiệu</a></li> <?php } ?>
                    <?php if($controller == "/news.php") { ?> <li class="active" ><a href="news">Tin tức</a></li> <?php } else { ?>  <li class="" ><a href="news">Tin tức</a></li> <?php } ?>
                    <?php if($controller == "/contact.php") { ?> <li class="active" ><a href="contact">Liên hệ</a></li> <?php } else { ?> <li class="" ><a href="contact">Liên hệ</a></li> <?php } ?>
                </ul>
                <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
                <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                    <li><a href="home">Trang chủ</a></li>
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
                        if (file_exists("Controller/Client/$controller")) {
                            include "Controller/Client/$controller";
                        } else {
                            include "View/client/404.php";
                        }


                    ?>
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
                                <li><a href="home">Trang chủ</a></li>
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
                                <li><a href="home">Trang chủ</a></li>
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
    <!--<script src='../../public/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361'
            type='text/javascript'></script>-->
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

<div role="main">
    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
    <div class="container mt-4">
        <form class="needs-validation" name="frmthanhtoan" method="post"
              action="#">
            <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

            <div class="py-5 text-center">
                <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                <h2>Thanh toán</h2>
                <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Giỏ hàng</span>
                        <span class="badge badge-secondary badge-pill"><?php echo count($productCheckouts)?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php if ($productCheckouts) {
                            $total = 0;
                            foreach ($productCheckouts as $key => $cartItem) {
                                $total += $cartItem["c_price"] * $cartItem["quantity"];
                         ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?php echo $cartItem["c_name"] ?></h6>
                                    <small class="text-muted"><?php echo $cartItem["c_price"] ?> x <?php echo $cartItem["quantity"] ?></small>
                                </div>
                                <span class="text-muted"><?php echo $cartItem["c_price"] * $cartItem["quantity"] ?></span>
                            </li>


                        <?php } ?>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong><?php echo $total ?></strong>
                            </li>
                        <?php } ?>
                    </ul>


                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Xác nhận</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Thông tin khách hàng</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="kh_ten">Họ tên</label>
                            <input type="text" class="form-control" name="kh_ten" id="kh_ten"
                                   value="<?php echo $_SESSION["user"]->hovaten ?>" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="kh_diachi">Địa chỉ</label>
                            <input type="text" class="form-control" name="kh_diachi" id="kh_diachi"
                                   value="<?php echo $_SESSION["user"]->diachi ?>" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="kh_dienthoai">Điện thoại</label>
                            <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai"
                                   value="<?php echo $_SESSION["user"]->dienthoai ?>" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="kh_email">Email</label>
                            <input type="text" class="form-control" name="kh_email" id="kh_email"
                                   value="<?php echo $_SESSION["user"]->email ?>" readonly="">
                        </div>
                    </div>

                    <h4 class="mb-3">Hình thức thanh toán</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                   value="1">
                            <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                   value="2">
                            <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                   value="3">
                            <label class="custom-control-label" for="httt-3">Ship COD</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <?php if (!isset($_GET["product-one"])) { ?>
                        <a href="checkout-submit" class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt
                            hàng</a>
                    <?php } else { ?>
                        <a href="checkout-submit?product-one=<?php echo $_GET["product-one"] ?>" class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt
                            hàng</a>
                    <?php } ?>
                </div>
            </div>
        </form>

    </div>
    <!-- End block content -->
</div>
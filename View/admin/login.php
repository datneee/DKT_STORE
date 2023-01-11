<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <!-- main -->
                <div class="template-customer">
                    <h1>Đăng nhập tài khoản</h1>
                    <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
                    <div class="row" style="margin-top:50px;">
                        <div class="col-md-6">
                            <div class="wrapper-form">
                                <form method='POST' action="">
                                    <p class="title"><span>Đăng nhập tài khoản</span></p>
                                    <div class="form-group">
                                        <label>Username:<b id="req">*</b></label>
                                        <input type="text" class="input-control" name="username" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu:<b id="req">*</b></label>
                                        <input type="password" class="input-control" name="password" required="">
                                    </div>
                                    <div style="margin: 8px 0; background: transparent;" class="alert-danger"><?php if ($mess) echo $mess ?></div>
                                    <input type="submit" class="button" value="Đăng nhập">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wrapper-form">
                                <p class="title"><span>Tạo tài khoản mới</span></p>
                                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                                <a href="?page=register" class="button">Đăng ký</a> </div>
                        </div>
                    </div>
                </div>
                <!-- end main -->
            </div>
        </div>


    </div>
</div>


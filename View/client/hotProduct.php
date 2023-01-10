<div class="special-collection">
    <div class="tabs-container">
        <div class="clearfix">
            <h2>Sản phẩm Hot</h2>
        </div>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix">
                <?php
                    foreach ($hotProducts as $hotProduct) {
                ?>
                    <!-- box product -->
                    <div class="col-xs-6 col-md-3 col-sm-6 ">
                        <div class="product-grid" id="product-1168979">
                            <div class="image"> <a href="apple-iphone-6s-plus-rose-gold-128gb"><img src="public/upload/product/<?php echo $hotProduct["c_img"] ?>" title="<?php echo $hotProduct["c_content"] ?>" alt="<?php echo $hotProduct["c_content"] ?>" class="img-responsive"></a> </div>
                            <div class="info">
                                <h3 class="name"><a href="apple-iphone-6s-plus-rose-gold-128gb"><?php echo $hotProduct["c_name"] ?></a></h3>
                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo $hotProduct["c_price"] ?> </span> </span> </p>
                                <div class="action-btn">
                                    <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                                        <a href="apple-iphone-6s-plus-rose-gold-128gb" class="button">Chọn sản phẩm</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <!-- end box product -->
            </div>
        </div>
    </div>
</div>
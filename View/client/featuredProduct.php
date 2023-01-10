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
            <?php
                foreach ($featuredProducts as $featuredProduct) {
            ?>
            <!-- box product -->
                <div class="col-xs-6 col-sm-4 col-md-3 ">
                    <div class="product-grid product-loop" id="product-1142079">
                        <div class="image"> <a href="laptop-asus-zenbook-ux305f-fc089h"><img src="public/upload/product/<?php echo $featuredProduct["c_img"] ?>" title="<?php echo $featuredProduct["c_name"] ?>" alt="<?php echo $featuredProduct["c_name"] ?>" class="img-responsive"></a> </div>
                        <div class="info">
                            <h3 class="name"><a href="laptop-asus-zenbook-ux305f-fc089h"><?php echo $featuredProduct["c_name"] ?></a></h3>
                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo $featuredProduct["c_price"] ?> </span> </span> </p>
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
            <?php } ?>
        </div>
    </div>
</div>
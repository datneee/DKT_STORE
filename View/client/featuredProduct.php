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
            foreach ($featuredProducts as $product) {
                ?>
                <!-- box product -->
                <div class="col-xs-6 col-sm-4 col-md-3 ">
                    <div class="product-grid product-loop" id="product-1142079">
                        <a href="<?php echo explode('&',PATH)[0] ?>?product=<?php echo $product["pk_product_id"]  ?>" class="image"> <img src="public/upload/product/<?php echo $product["c_img"] ?>" title="<?php echo $product["c_name"] ?>" alt="<?php echo $featuredProduct["c_name"] ?>" class="img-responsive"></a>
                        <div class="info">
                            <h3 class="name"><a href="<?php echo explode('&',PATH)[0] ?>?product=<?php echo $product["pk_product_id"]  ?>"><?php echo $product["c_name"] ?></a></h3>
                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo $product["c_price"] ?> </span> </span> </p>
                            <div class="action-btn">
                                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142079">
                                    <input type="hidden" name="variantId" value="1777262" />
                                    <button class="button add-cart"><a href="123123">mua hàng</a> </button>
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
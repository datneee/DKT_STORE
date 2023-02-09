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
                foreach ($hotProducts as $product) {
                    ?>
                    <!-- box product -->
                    <div class="col-xs-6 col-sm-4 col-md-3 ">
                        <div class="product-grid product-loop" id="product-1142079">
                            <a href="<?php echo explode('&',PATH)[0] ?>?product=<?php echo $product["pk_product_id"]  ?>" class="image"> <img src="public/upload/product/<?php echo $product["c_img"] ?>" title="<?php echo $product["c_name"] ?>" alt="<?php echo $featuredProduct["c_name"] ?>" class="img-responsive"></a>
                            <div class="info">
                                <h3 class="name"><a href="<?php echo explode('&',PATH)[0] ?>?product=<?php echo $product["pk_product_id"]  ?>"><?php echo $product["c_name"] ?></a></h3>
                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo $product["c_price"] ?> </span> </span> </p>
                                <div class="action-btn">
                                    <form action="" method="post" enctype="multipart/form-data" id="product-actions-1142079">
                                        <input type="hidden" name="variantId" value="1777262" />
                                        <button class="button add-cart"><a href="checkout?product-one=<?php echo $product["pk_product_id"] ?>">mua ngay</a> </button>
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
</div>
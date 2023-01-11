<div class="special-collection">
    <div class="tabs-container">
        <div class="clearfix" >
            <div>
                <h5><?php echo $categorySelected["c_name"] ?></h5>
            </div>
            <ul style="display: flex; align-items: center">
                <p style="margin: 0"><b>Trang</b></p>
                <?php
                for($i = 1; $i <= $pages; ++$i) {
                    ?>
                    <li><a class="btn-link" style="color: blue" href="categories?category=<?php echo $option ?>&pagination=<?php echo $i ?>"><?php echo $i ?></a></li> &nbsp; | &nbsp;
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix">
                <?php
                    foreach ($products as $product) {
                ?>
                <!-- box product -->
                <div class="col-xs-6 col-sm-4 col-md-3 ">
                    <div class="product-grid product-loop" id="product-1142079">
                        <div class="image"> <a href="laptop-asus-zenbook-ux305f-fc089h"><img src="public/upload/product/<?php echo $product["c_img"] ?>" title="<?php echo $product["c_name"] ?>" alt="<?php echo $featuredProduct["c_name"] ?>" class="img-responsive"></a> </div>
                        <div class="info">
                            <h3 class="name"><a href="laptop-asus-zenbook-ux305f-fc089h"><?php echo $product["c_name"] ?></a></h3>
                            <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo $product["c_price"] ?> </span> </span> </p>
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
</div>
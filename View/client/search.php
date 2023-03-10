<div class="special-collection">
    <div class="tabs-container">
        <div class="clearfix" >
            <div style="
    display: inline-block;
    padding: 4px;
    background: #cccccc6b;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
">
                <h5 style="
    font-size: 24px;
    padding: 0 8px;
">Kết quả tìm kiếm của <b><?php echo $searchValue ?></b></h5>
            </div>

        </div>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix">
                <?php
                foreach ($productSearched as $product) {
                    ?>
                    <!-- box product -->
                    <div class="col-xs-6 col-sm-4 col-md-3 ">
                        <div class="product-grid product-loop" id="product-1142079">
                            <div class="image"> <a href="<?php echo explode('&',PATH)[0] ?>&product=<?php echo $product["pk_product_id"]  ?>"><img src="public/upload/product/<?php echo $product["c_img"] ?>" title="<?php echo $product["c_name"] ?>" alt="<?php echo $featuredProduct["c_name"] ?>" class="img-responsive"></a> </div>
                            <div class="info">
                                <h3 class="name"><a href="laptop-asus-zenbook-ux305f-fc089h"><?php echo $product["c_name"] ?></a></h3>
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
        <div style="display: flex;width: 100%;justify-content: center;">

            <ul class="pagination pull-right" style="margin-top: 0px !important">
                <li><a >Trang</a></li>
                <?php
                for ($i = 0; $i <= $pages; ++$i) {
                    if ($i + 1 == $paging) {

                        ?>
                        <li><a style="background: #77ca64; color: #ffff" href="<?php echo explode('&',PATH)[0] ?>&pageSearch=<?php echo $i ?>"><?php echo $i + 1 ?></a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo explode('&',PATH)[0] ?>&pageSearch=<?php echo $i ?>"><?php echo $i + 1 ?></a></li>
                    <?php }} ?>
            </ul>
        </div>
    </div>
</div>
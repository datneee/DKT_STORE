<script type="text/javascript">
    /*setTimeout(function () {
        document.getElementById('mymodel').style.display = "block";
    }, 1500)
    document.getElementById('mymodel').style.display = "none";*/
</script>
<div class="special-collection">
    <div class="tabs-container">
        <div class="clearfix" >
            <div class="col-xs-12 col-md-9">
                <!-- main -->
                <div class="product-detail" itemscope itemtype="http://schema.org/Product">
                    <meta itemprop="url" content="//dktstore-theme.bizwebvietnam.net/microsoft-lumia-950-xl-mau-den">
                    <meta itemprop="image" content="public/frontend/images/msc.jpg?v=1469340617533">
                    <meta itemprop="shop-currency" content="VND">
                    <div class="top">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 product-image">
                                <div class="featured-image"> <img src="public/upload/product/<?php echo $product["c_img"] ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="//bizweb.dktcdn.net/100/047/633/products/msc.jpg?v=1469340617533"

                                                                  alt="MICROSOFT LUMIA 950 XL"
                                    /> </div>
                            </div>
                            <div class="col-xs-12 col-md-6 info">
                                <h1 itemprop="name"><?php echo $product["c_name"] ?></h1>
                                <p class="sku">Mã sản phẩm:&nbsp; <?php echo $product["pk_product_id"] ?> <span></span></p>
                                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo $product["c_price"] ?> </span> </span> </p>
                                <p class="desc rte"> <?php echo $product["c_description"] ?></p>
                                <form action="<?php echo URL ?>&action=addToCart" method="POST" enctype="multipart/form-data" class="product-form">
                                    <!--<select id="product-selectors" name="variantId" style="display:none">
                                        <option  selected="selected"  value="1853207">Đen - 15.990.000₫</option>
                                        <option  value="1853286">Trắng - 14.500.000₫</option>
                                    </select>-->
                                    <div class="quantity">
                                        <label>Số lượng</label>
                                        <input type="number" id="qty" name="quantity" value="1" min="1" class="input-control" required="Không thể để trống">
                                    </div>
                                    <div class="action-btn">
                                        <input type="submit" class="button product-add-to-cart" value="Thêm vào giỏ hàng">
                                        <?php if ($message) { ?>
                                            <div style="margin-top: 12px" class="alert-success" id="mymodel"><?php echo $message ?></div>
                                        <?php } ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="middle">
                        <ul class="list-unstyled navtabs" style="float: none">
                            <li style="margin: 0"><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1">Chi tiết sản phẩm</a></li>
                        </ul>
                        <div class="tab-container">
                            <!-- chi tiet -->
                            <div id="tab1" class="content-tabs">
                                <div class="rte">
                                    <p style="text-align: justify;"> <?php echo $product["c_content"] ?> </p>

                                </div>
                            </div>
                            <!-- chi tiet -->
                        </div>
                    </div>
                </div>

                <!-- end main -->
            </div>
        </div>
    </div>
</div>
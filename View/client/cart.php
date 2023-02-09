<?php if ( $orders && count($orders) > 0) { ?>
    <div class="special-collection">
        <div class="tabs-container">
            <div class="clearfix" >
                <div class="col-xs-12 col-md-9" style="width: 100%">
                    <!-- main -->
                    <div class="template-cart">
                        <form action="/cart?action=update" method="post">
                            <div class="table-responsive">
                                <table class="table table-cart">
                                    <thead>
                                    <tr>
                                        <th class="image">Ảnh sản phẩm</th>
                                        <th class="name">Tên sản phẩm</th>
                                        <th class="price">Giá bán lẻ</th>
                                        <th class="quantity">Số lượng</th>
                                        <th class="price">Thành tiền</th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach ($orders as $order) {
                                    ?>
                                    <tr>
                                        <td><img src="public/upload/product/<?php echo $order["c_img"] ?>" class="img-responsive" /></td>
                                        <td><a href="?product=<?php echo $order["pk_product_id"] ?>"><?php echo $order["c_name"] ?></a></td>
                                        <td><?php echo $order["c_price"] ?></td>
                                        <td><input  onchange="handleChangeItem(event, <?php echo $order["order_id"] ?>, <?php echo $order["pk_product_id"] ?>)" type="number" id="qty" min="1" class="input-control" value="<?php echo $order["quantity"] ?>" name="<?php echo $order["pk_product_id"] ?>" required="Không thể để trống"></td>
                                        <td><p><b><?php echo $order["c_price"] * $order["quantity"] ?></b></p></td>
                                        <td><a href="<?php echo explode('?',PATH)[0] ?>?action=delete&code=<?php echo $order["pk_product_id"] ?>" data-id="2479395"><i style="color: red" class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="6"><a href="<?php echo explode('?',PATH)[0] ?>?action=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="home" class="button pull-right black">Tiếp tục mua hàng</a>
                                        <input type="submit" class="button pull-right" value="Cập nhật"></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                        <div class="total-cart"> Tổng tiền thanh toán:
                            <?php echo $sumPrice ?> <br>
                            <a href="/checkout" class="button black">Thanh toán</a> </div>
                    </div>
                    <!-- end main -->
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
        <br>
    <div class="no-item">
        <p style="text-align:left; text-transform: uppercase">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
    </div>
    <a href="home" class="button pull-left black">Tiếp tục mua hàng</a>
<?php } ?>

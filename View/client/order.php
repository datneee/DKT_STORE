<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order
                    <small>List</small>
                </h1>
                <?php foreach ($orders as $order) { ?>
                    <div class="odd gradeX" style="display: flex; align-items: center">
                        <div class="col-lg-4" style="display: flex; align-items: center" >
                            <label style="margin: 0 6px 0 0">Order ID: </label>
                            <p style="margin: 0"><b style="color: #0b97c4"><?php echo $order["order_id"] ?></b></p>
                        </div>
                        <div class="col-lg-4" style="display: flex; align-items: center">
                            <label style="margin: 0 6px 0 0">Ngày mua: </label>
                            <p style="margin: 0"><b style="color: #0b97c4"><?php echo $order["ngaymua"] ?></b></p>
                        </div>
                        <div class="col-lg-4" style="display: flex; align-items: center">
                            <label style="margin: 0 6px 0 0">Giá: </label>
                            <p style="margin: 0"><b style="color: #0b97c4"><?php echo $order["gia"] ?></b></p>
                        </div>
                        <div class="col-lg-4" style="display: flex; align-items: center">
                            <label style="margin: 0 6px 0 0">Trạng thái: </label>
                            <p style="margin: 0"><b style="color: #0b97c4"><?php echo $order["trangthai"] == 0 ? "Processing" : "Done" ?></b></p>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>

                        <tr align="center">
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Content</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($order["orderDetail"] as $item) { ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $item["product"]->pk_product_id ?></td>
                                <td><?php echo $item["product"]->c_name ?></td>
                                <td><?php echo $item["product"]->c_description ?></td>
                                <td><?php echo $item["product"]->c_content ?></td>
                                <td><img width="80px" class="img-thumbnail" src="public/upload/product/<?php echo $item["product"]->c_img ?>"></td>
                                <td><?php echo $item["product"]->c_price ?></td>
                                <td><?php echo $item["c_number"] ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <br>
                    <?php ?>
                <?php } ?>
            </div>

            <!-- /.col-lg-12 -->
            <div style="display: flex;width: 100%;justify-content: center;">

                <ul class="pagination pull-right" style="margin-top: 0px !important">
                    <li><a >Trang</a></li>
                    <?php
                    for ($i = 0; $i <= $pages; ++$i) {
                        if ($i + 1 == $paging) {

                            ?>
                            <li><a style="background: #77ca64; color: #ffff" href="?page=order&pagination=<?php echo $i ?>"><?php echo $i + 1 ?></a></li>
                        <?php } else { ?>
                            <li><a href="?page=order&pagination=<?php echo $i ?>"><?php echo $i + 1 ?></a></li>
                        <?php }} ?>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
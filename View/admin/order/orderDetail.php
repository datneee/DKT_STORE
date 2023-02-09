<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order Detail
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>

                <tr align="center">
                    <th>Order Detail ID</th>
                    <th>Order Id</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Numbers</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($orderDetails as $orderDetail) { ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $orderDetail["order_detail_id"] ?></td>
                        <td><?php echo $orderDetail["order_id"] ?></td>
                        <td><?php echo $orderDetail["fk_product_id"] ?></td>
                        <td><?php echo $orderDetail["product"]->c_name ?></td>
                        <td> <img class="img-thumbnail" width="80px" src="public/upload/product/<?php echo $orderDetail["product"]->c_img ?>"> </td>
                        <td><?php echo $orderDetail["c_number"] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <a href="?controller=orders" class="btn btn-default">Back to list</a>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
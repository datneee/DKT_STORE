<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>

                <tr align="center">
                    <th>ID</th>
                    <th>Customer Id</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Order Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($orders as $order) { ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $order["order_id"] ?></td>
                        <td><?php echo $order["customer_id"] ?></td>
                        <td><?php echo $order["ngaymua"] ?></td>
                        <td><?php echo $order["gia"] ?></td>
                        <td><?php echo $order["trangthai"] == 0 ? "Processing" : "Resolve" ?></td>
                        <td class="center"><i style="color: red" class="fa fa-trash-o  fa-fw"></i><a onclick="return window.confirm('Confirm delete order ?');" href="?controller=orders&action=delete&id=<?php echo $order["order_id"]  ?>"> Delete</a></td>
                        <td class="center"><i style="color: #f0ad4e" class="fa fa-pencil fa-fw"></i> <a  href="?controller=orders&action=edit&id=<?php echo $order["order_id"]  ?>">Edit</a></td>
                        <td class="center"><i style="color:cornflowerblue;" class="fa fa-pagelines fa-fw"></i> <a  href="?controller=orders&action=orderDetail&id=<?php echo $order["order_id"]  ?>">View</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
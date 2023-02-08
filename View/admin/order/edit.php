<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Order ID</label>
                        <input class="form-control" disabled value="<?php echo $order->order_id ?>" name="txtOrderId"  />
                    </div>
                    <div class="form-group">
                        <label>Customer ID</label>
                        <input class="form-control" disabled name="txtCusId" value="<?php echo $order->customer_id ?>"  />
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input class="form-control" disabled name="txtDate" value="<?php echo $order->ngaymua ?>"  />
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input disabled type="text" class="form-control" value="<?php echo $order->gia ?>" name="txtTotal"  />
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option  <?php echo $order->trangthai == 1 ? "selected" : "" ?> value="1">Resolve</option>
                            <option <?php echo $order->trangthai == 0 ? "selected" : "" ?> value="0">Processing</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Order Edit</button>
                    <a href="?controller=orders"  class="btn btn-default">Go to list</a>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
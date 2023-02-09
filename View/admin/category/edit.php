<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input value="<?php echo $category->c_name?>" class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
                    </div>
                    <div class="form-group">
                        <label>Category Description</label>
                        <input value="<?php echo $category->c_description?>" class="form-control" name="txtDes" placeholder="Please Enter Category Order" />
                    </div>
                    <div class="form-group">
                        <label>Category Status</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" <?php echo $category->c_home == 1 ? "checked" : "" ?> type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="0" <?php echo $category->c_home == 0 ? "checked" : "" ?> type="radio">Invisible
                        </label>
                    </div>
                    <?php if ($message)  { ?>
                        <div class="alert-success" style="margin: 8px 0;"><?php echo $message ?></div>
                    <?php } ?>
                    <?php if ($error)  { ?>
                        <div class="alert-warning" style="margin: 8px 0;"><?php echo $error ?></div>
                    <?php } ?>
                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <a href="?controller=categories" class="btn btn-default">Back to list</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
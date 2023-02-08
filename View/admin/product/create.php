<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="category">
                            <?php foreach ($categories as $category) { ?>
                                <option  value="<?php echo $category["pk_category_product_id"] ?>"><?php echo $category["c_name"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtName" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Hot product</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Hot
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="0" type="radio">Non-hot
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="3" name="txtDes"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" rows="3" name="txtContent"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="fImages" onchange="handleChangeImage(event)">
                        <img id="image" src="" class="img-thumbnail" width="80px;">
                    </div>
                    <div class="form-group">
                        <label>Product price</label>
                        <input class="form-control" name="txtPrice" type="number" value="0" min="0" placeholder="Please enter product price" />
                    </div>

                    <button type="submit" class="btn btn-default">Product Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<script type="text/javascript">
    function handleChangeImage(event) {
        var imgPath = URL.createObjectURL(event.target.files[0]);

        document.getElementById("image").src = imgPath;
    }
</script>

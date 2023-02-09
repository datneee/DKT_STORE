<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Banner
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input value="<?php echo $banner->c_name ?>" class="form-control" name="txtBannerName"  />
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="fImages" onchange="handleChangeImage(event)">
                        <img id="image" src="public/frontend/images/<?php echo $banner->c_img ?>" class="img-thumbnail" width="80px;">
                    </div>
                    <button type="submit" class="btn btn-default">Banner Update</button>
                    <a href="?controller=banners" class="btn btn-default">Back to list</a>
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
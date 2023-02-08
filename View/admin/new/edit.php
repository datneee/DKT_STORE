<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Banner
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>New Name</label>
                        <input value="<?php echo $new->c_name ?>" class="form-control" name="txtNewName"  />
                    </div>
                    <div class="form-group">
                        <label>New Description</label>
                        <input value="<?php echo $new->c_description ?>" class="form-control" name="txtNewDes"  />
                    </div>
                    <div class="form-group">
                        <label>New Content</label>
                        <textarea rows="5"  class="form-control" name="txtNewCont" ><?php echo "{$new->c_content}"?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="fImages" onchange="handleChangeImage(event)">
                        <img id="image" src="public/upload/news/<?php echo $new->c_img ?>" class="img-thumbnail" width="80px;">
                    </div>
                    <div class="form-group">
                        <label>Hot New</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" <?php echo $new->c_hotnews == 1 ? "checked" : "" ?> type="radio">Hot
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="0" <?php echo $new->c_hotnews == 0 ? "checked" : "" ?> type="radio">Non-hot
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">New Edit</button>
                    <a href="?controller=news" class="btn btn-default">Back to list</a>
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
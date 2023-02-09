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
                        <input class="form-control" name="txtNewName" placeholder="Please Enter New Name" />
                    </div>
                    <div class="form-group">
                        <label>New Description</label>
                        <input class="form-control" name="txtNewDes" placeholder="Please Enter New Name" />
                    </div>
                    <div class="form-group">
                        <label>New Content</label>
                        <input class="form-control" name="txtNewCont" placeholder="Please Enter New Name" />
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="fImages" onchange="handleChangeImage(event)">
                        <img id="image" src="" class="img-thumbnail" width="80px;">
                    </div>
                    <div class="form-group">
                        <label>Hot New</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Hot
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="0" type="radio">Non-hot
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">New Add</button>
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
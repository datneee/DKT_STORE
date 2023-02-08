<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider banner
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>

                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($banners as $banner) { ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $banner["pk_slide_id"] ?></td>
                        <td><?php echo $banner["c_name"] ?></td>
                        <td><img width="100px" class="img-thumbnail" src="public/frontend/images/<?php echo $banner["c_img"] ?>"> </td>
                        <td class="center"><i style="color: red" class="fa fa-trash-o  fa-fw"></i><a onclick="return window.confirm('Confirm delete banner ?');" href="?controller=banners&action=delete&id=<?php echo $banner["pk_slide_id"]  ?>"> Delete</a></td>
                        <td class="center"><i style="color: #f0ad4e" class="fa fa-pencil fa-fw"></i> <a  href="?controller=banners&action=edit&id=<?php echo $banner["pk_slide_id"]  ?>">Edit</a></td>
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
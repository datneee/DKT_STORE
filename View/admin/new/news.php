<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>

                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Hot New</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($news as $new) { ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $new["pk_news_id"] ?></td>
                        <td><?php echo $new["c_name"] ?></td>
                        <td><?php echo $new["c_description"] ?></td>
                        <td><?php echo $new["c_content"] ?></td>
                        <td><img width="100px" class="img-thumbnail" src="public/upload/news/<?php echo $new["c_img"] ?>"> </td>
                        <td><?php echo $new["c_hotnews"] == 1 ? "Hot new" : "Normal" ?></td>
                        <td class="center"><i style="color: red" class="fa fa-trash-o  fa-fw"></i><a onclick="return window.confirm('Confirm delete category ?');" href="?controller=news&action=delete&id=<?php echo $new["pk_news_id"]  ?>"> Delete</a></td>
                        <td class="center"><i style="color: #f0ad4e" class="fa fa-pencil fa-fw"></i> <a  href="?controller=news&action=edit&id=<?php echo $new["pk_news_id"]  ?>">Edit</a></td>
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
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
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
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category) { ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $category["pk_category_product_id"] ?></td>
                        <td><?php echo $category["c_name"] ?></td>
                        <td><?php echo $category["c_description"] ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return window.confirm('Confirm delete category ?');" href="?controller=categories&action=delete&id=<?php echo $category["pk_category_product_id"]  ?>"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a  href="?controller=categories&action=edit&id=<?php echo $category["pk_category_product_id"]  ?>">Edit</a></td>
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
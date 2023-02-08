<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Hot Product</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) { ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo  $product["pk_product_id"] ?></td>
                        <td><?php echo $product["fk_category_product_id"] ?></td>
                        <td><?php echo $product["c_name"] ?></td>
                        <td><?php echo $product["c_description"] ?></td>
                        <td><?php echo $product["c_content"] ?></td>

                        <td><img width="100px" class="img-thumbnail" src="public/upload/product/<?php echo $product["c_img"] ?>"></td>
                        <td><?php echo $product["c_price"] ?></td>
                        <td><?php echo $product["c_hotproduct"] == 1 ? "Hot" : "Non-hot" ?></td>
                        <td class="center"><i style="color: red" class="fa fa-trash-o  fa-fw"></i><a onclick="return window.confirm('Confirm delete product ?');" href="?controller=products&action=delete&id=<?php echo $product["pk_product_id"]  ?>"> Delete</a></td>
                        <td class="center"><i style="color: #f0ad4e" class="fa fa-pencil fa-fw"></i> <a href="?controller=products&action=edit&id=<?php echo $product["pk_product_id"]  ?>">Edit</a></td>
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
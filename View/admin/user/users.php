<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Username</th>
                    <th>FullName</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo  $user["pk_user_id"] ?></td>
                        <td><?php echo $user["c_username"] ?></td>
                        <td><?php echo $user["c_fullname"] ?></td>
                        <td><?php echo $user["c_password"] ?></td>
                        <td><?php echo $user["c_role"] ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="?controller=products&action=delele&id=<?php echo $user["pk_user_id"]  ?>"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="?controller=products&action=edit&id=<?php echo $user["pk_user_id"]  ?>">Edit</a></td>
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
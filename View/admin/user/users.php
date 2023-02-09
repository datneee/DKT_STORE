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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) {
                    if ($user["pk_user_id"] == $_SESSION["admin"]->pk_user_id) {
                        continue;
                    } else {?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo  $user["pk_user_id"] ?></td>
                        <td><?php echo $user["c_username"] ?></td>
                        <td><?php echo $user["c_fullname"] ?></td>
                        <td><?php echo $user["c_email"] ?></td>
                        <td><?php echo $user["c_phone"] ?></td>
                        <td><?php echo $user["c_password"] ?></td>
                        <td><?php echo $user["c_role"] ?></td>
                        <td class="center"><i style="color: red" class="fa fa-trash-o  fa-fw"></i><a onclick="return window.confirm('Confirm delete user ?');" href="?controller=users&action=delete&id=<?php echo $user["pk_user_id"]  ?>"> Delete</a></td>
                        <td class="center"><i style="color: #f0ad4e" class="fa fa-pencil fa-fw"></i> <a href="?controller=users&action=edit&id=<?php echo $user["pk_user_id"]  ?>">Edit</a></td>
                    </tr>
                <?php } } ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
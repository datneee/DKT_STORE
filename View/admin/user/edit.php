<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" disabled value="<?php echo $user->c_username ?>" name="txtUser" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>FullName</label>
                        <input class="form-control" name="txtFName" value="<?php echo $user->c_fullname ?>" placeholder="Please Enter FullName" />
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" name="txtPhone" value="<?php echo $user->c_phone ?>" placeholder="Please Enter Phone number" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" value="<?php echo $user->c_password ?>" name="txtPass" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="txtEmail" value="<?php echo $user->c_email ?>" placeholder="Please Enter Email" />
                    </div>
                    <div class="form-group">
                        <label>User Level</label>
                        <label class="radio-inline">
                            <input name="rdoLevel" value="admin" <?php echo $user->c_role == 'admin' ? "checked" : "" ?>  type="radio">Admin
                        </label>
                        <label class="radio-inline">
                            <input name="rdoLevel" value="client" <?php echo $user->c_role == 'client' ? "checked" : "" ?> type="radio">Member
                        </label>
                    </div>
                    <?php if ($message)  { ?>
                        <div class="alert-success" style="margin: 8px 0;"><?php echo $message ?></div>
                    <?php } ?>
                    <?php if ($error)  { ?>
                        <div class="alert-warning" style="margin: 8px 0;"><?php echo $error ?></div>
                    <?php } ?>
                    <button type="submit" class="btn btn-default">User Edit</button>
                    <a href="?controller=users"  class="btn btn-default">Go to list</a>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
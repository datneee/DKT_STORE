<?php
    $db = new Database();
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $message = '';
    $error = '';
    $check = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cName = $_POST["txtUser"];
        $fName = $_POST["txtFName"];
        $phone = $_POST["txtPhone"];
        $password = $_POST["txtPass"];
        $rePassword = $_POST["txtRePass"];
        if ($password != $rePassword) {
            $check = false;
            $error = "Password dosen't match !";
        }
        $email = $_POST["txtEmail"];
        $level = $_POST["rdoLevel"];
        if ($check) {
            $password = md5($password);
            $queryCreateUser = "INSERT INTO `tbl_user` (`c_username`,`c_fullname`, `c_phone`, `c_email`, `c_password`, `c_role`) VALUES ('{$cName}', '{$fName}','{$phone}', '{$email}', '{$password}', '{$level}' ) ";
            echo $queryCreateUser;
            $result = mysqli_query($db->connection, $queryCreateUser);
            if ($result) {
                $message = "Create user successfully !";
            } else {
                $error = "Error when create ...";
            }
        }
    }

    mysqli_close($db->connection);
    include "View/admin/user/create.php";
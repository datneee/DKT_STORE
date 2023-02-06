<?php

    $db = new Database();
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $user = null;
    $message = '';
    $error = '';
    if ($id) {

        $queryGetUserById = "SELECT * FROM tbl_user p WHERE p.pk_user_id = {$id}";
        $result = mysqli_query($db->connection, $queryGetUserById);
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $user = $data;
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fName = $_POST["txtFName"];
        $phone = $_POST["txtPhone"];
        $password = md5($_POST["txtPass"]);
        $email = $_POST["txtEmail"];
        $level = $_POST["rdoLevel"];
        $queryUpdateUser = "UPDATE `tbl_user` tcp SET tcp.c_fullname = '{$fName}', tcp.c_phone = '{$phone}', tcp.c_email = '{$email}', tcp.c_password = '{$password}', tcp.c_role = '{$level}' WHERE tcp.pk_user_id = {$id} ";
        echo $queryUpdateUser;
        $result = mysqli_query($db->connection, $queryUpdateUser);
        if ($result) {
            $message = "Update user successfully !";
        } else {
            $error = "Error when update ...";
        }
    }

    mysqli_close($db->connection);
    include "View/admin/user/edit.php";
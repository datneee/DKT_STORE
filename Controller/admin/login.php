<?php

    $db = new Database();
    $mess = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_email = isset($_POST["email"]) ? $_POST["email"] : '';
        $c_password = isset($_POST["password"]) ? $_POST["password"] : '';
        $queryGetUserByUsername = "SELECT * FROM `tbl_user` u WHERE u.c_email = '$c_email' ";
        $result = mysqli_query($db->connection, $queryGetUserByUsername);
        $user = null;
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $user = $data;
            }
        }
        if ($user) {
            if ($user->c_password == md5($c_password)) {
                $_SESSION["admin"] = $user;
                header("location:admin");
            } else {
                $mess = "Mật khẩu không chính xác !";
                header("location:admin?controller=login&error=".$mess);
            }
        } else {
            $mess = "Tài khoản không ồn tại";
            header("location:admin?controller=login&error=".$mess);
        }



    }

    mysqli_close($db->connection);
    include "View/admin/login.php";
?>
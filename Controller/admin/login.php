<?php
    $db = new Database();
    $mess = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_username =$_POST["username"];
        $c_password =$_POST["password"];

        $queryGetUserByUsername = "SELECT * FROM `tbl_user` u WHERE u.c_username = '$c_username' ";
        $result = mysqli_query($db->connection, $queryGetUserByUsername);
        $user = null;
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $user = $data;
            }
        }
        if ($user) {
            if ($user->c_password == md5($c_password)) {
                $_SESSION["username"] = $user->c_username;
                header("location:index.php");
            } else {
                $mess = "Mật khẩu không chính xác !";
                header("loacation:?page=login");
            }
        } else {
            $mess = "Tài khoản không ồn tại";
            header("loacation:?page=login");
        }



    }

    mysqli_close($db->connection);
    include "View/admin/login.php";

?>
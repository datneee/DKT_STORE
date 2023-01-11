<?php

    $db = new Database();
    $mess = '';
    function checkUserExistByUsername($database ,$username) {
        $queryGetUserByUsername = "SELECT * FROM `tbl_user` u WHERE u.c_username = '$username' ";
        $result = mysqli_query($database, $queryGetUserByUsername);
        $user = null;
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $user = $data;
            }
        }
        if ($user) {
            return true;
        }
        return false;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $c_username = $_POST["username"];

        if (checkUserExistByUsername($db->connection, $c_username)) {
            $mess = "Username đã tồn tại, vui lòng nhập username khác !";
            mysqli_close($db->connection);
        } else {
            $c_fullName = $_POST["fullName"];
            $c_email = $_POST["email"];
            $c_address = $_POST["address"];
            $c_dt = $_POST["phone"];
            $c_password = md5($_POST["password"]);

            $queryRegistrationAccount = "INSERT INTO `tbl_user` (`c_username`,`c_fullname`, `c_email`,  `c_phone`, `c_address`, `c_password`) values ('$c_username' ,'$c_fullName', '$c_email', '$c_dt', '$c_address', '$c_password')";

            $result = mysqli_query($db->connection, $queryRegistrationAccount);
            if ($result) {
                $mess = 'Đăng kí thành công !';
                header("location:?page=login");
            } else {
                $mess = 'Có lỗi !';
            }
        }
        mysqli_close($db->connection);
    }

    include "View/admin/register.php";

?>
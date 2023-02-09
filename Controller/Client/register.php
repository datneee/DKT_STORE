<?php

    $db = new Database();
    $mess = '';
    function checkUserExistByEmail($database ,$mail) {
        $queryGetUserByEmail = "SELECT * FROM `tbl_customer` u WHERE u.email = '$mail' ";
        $result = mysqli_query($database, $queryGetUserByEmail);
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

        $c_email = $_POST["email"];

        if (checkUserExistByEmail($db->connection, $c_email)) {
            $mess = "Email đã tồn tại, vui lòng sử dụng email khác !";
            mysqli_close($db->connection);
        } else {
            $c_fullName = $_POST["fullName"];
            $c_address = $_POST["address"];
            $c_dt = $_POST["phone"];
            $c_password = md5($_POST["password"]);

            $queryRegistrationAccount = "INSERT INTO `tbl_customer` (`hovaten`, `diachi`, `dienthoai`,  `email`, `password`) values ('$c_fullName', '$c_address', '$c_dt', '$c_email', '$c_password')";

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

    include "View/client/register.php";

?>
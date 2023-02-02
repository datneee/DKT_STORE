<?php
    $db = new Database();
    $mess = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_username = isset($_POST["username"]) ? $_POST["username"] : '';
        $c_password = isset($_POST["password"]) ? $_POST["password"] : '';

        $queryGetUserByUsername = "SELECT * FROM `tbl_customer` u WHERE u.email = '$c_username' ";
        $result = mysqli_query($db->connection, $queryGetUserByUsername);
        $user = null;
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $user = $data;
            }
        }
        if ($user) {
            if ($user->password == md5($c_password)) {
                $_SESSION["username"] = $user->email;
                $_SESSION["customerId"] = $user->customer_id;
                $_SESSION["user"] = $user;
                $_SESSION['carts'] = array();
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
    include "View/client/login.php";

?>
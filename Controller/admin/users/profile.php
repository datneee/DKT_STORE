<?php
    $account = $_SESSION["admin"];
    $message = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $yPass = $_POST["yourPass"];
            $newPass = $_POST["newPass"];

            if (md5($yPass) == $account->c_password) {
                $db = new Database();
                $newPass = md5($newPass);
                $queryUpdatePassword = "UPDATE `tbl_user` tcp SET tcp.c_password = '{$newPass}' WHERE tcp.pk_user_id = {$account->pk_user_id}";
                $result = mysqli_query($db->connection, $queryUpdatePassword);
                if ($result) {
                    mysqli_close($db->connection);
                    echo "<script type='text/javascript'>alert('Change password successfully, please login again !')</script>";
                    require "Controller/admin/logout.php";
                }
            }else {
                echo "<script type='text/javascript'>alert('Password incorrect !')</script>";
            }
    }
    include "View/admin/user/profile.php";
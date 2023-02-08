<?php
    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        if (isset($_GET["action"]) == "delete") {
            $id = isset($_GET["id"]) ? $_GET["id"] : '';
            $queryDeleteProduct = "DELETE FROM `tbl_user` WHERE pk_user_id = {$id}";
            $result = mysqli_query($db->connection, $queryDeleteProduct);
            if ($result) {
                require "Controller/admin/users/index.php";
            }
        }
        mysqli_close($db->connection);
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/users/index.php";
    }
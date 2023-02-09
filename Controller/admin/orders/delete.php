<?php
    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        if (isset($_GET["action"]) == "delete") {
            $id = isset($_GET["id"]) ? $_GET["id"] : '';
            $queryDeleteOrder = "DELETE FROM `tbl_order` WHERE order_id = {$id}";
            $result1 = mysqli_query($db->connection, $queryDeleteOrder);

            $queryDeleteOrderDetail = "DELETE FROM `tbl_order_detail` WHERE order_id = {$id}";
            $result2 = mysqli_query($db->connection, $queryDeleteOrderDetail);
            if ($result1 && $result2) {
                require "Controller/admin/orders/index.php";
            }
        }
        mysqli_close($db->connection);
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/orders/index.php";
    }
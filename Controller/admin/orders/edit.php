<?php
    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $order = null;
        if ($id) {

            $queryGetProductById = "SELECT * FROM tbl_order p WHERE p.order_id = {$id}";
            $result = mysqli_query($db->connection, $queryGetProductById);
            if ($result) {
                while ($data = mysqli_fetch_object($result)) {
                    $order = $data;
                }
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $status = $_POST["status"];

            $queryUpdateOrder = "UPDATE `tbl_order` tcp SET tcp.trangthai = {$status} WHERE tcp.order_id = {$id} ";

            $result = mysqli_query($db->connection, $queryUpdateOrder);
            if ($result) {
                echo "<script type='text/javascript'>alert('Edit order successfully !')</script>";
            } else {
                echo "<script type='text/javascript'>alert('Error !')</script>";
            }
        }

        mysqli_close($db->connection);
        include "View/admin/order/edit.php";
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/orders/index.php";
    }
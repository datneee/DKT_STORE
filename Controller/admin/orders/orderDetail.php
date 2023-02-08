<?php
    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $orderDetails = array();
        if ($id) {

            $queryGetListOrderDetail = "SELECT * FROM tbl_order_detail p WHERE p.order_id = {$id}";
            $result = mysqli_query($db->connection, $queryGetListOrderDetail);
            if ($result) {
                while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                    $orderDetails[] = $data;
                }
            }
        }
        function addDetailProduct($arr) {
            $db = new Database();
            $productId = $arr["fk_product_id"] ? $arr["fk_product_id"] : "";
            if ($productId) {
                $queryGetProductById = "SELECT * FROM tbl_product p WHERE p.pk_product_id = {$productId}";
                $result = mysqli_query($db->connection, $queryGetProductById);
                if ($result) {
                    while ($data = mysqli_fetch_object($result)) {
                        $product = $data;
                    }
                }
            }
            mysqli_close($db->connection);
            $arr["product"] = $product;
            return $arr;
        }
        $orderDetails = array_map("addDetailProduct", $orderDetails);
        mysqli_close($db->connection);
        include "View/admin/order/orderDetail.php";
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/orders/index.php";
    }
<?php
    $db = new Database();
    $limits = 2;
    $paging = isset($_GET["pagination"]) ? $_GET["pagination"]  + 1 : 1;
    $letPage = isset($_GET["pagination"]) ? $_GET["pagination"] * $limits + 1 : 1;
    $id = $_SESSION["customerId"];
    $query = "SELECT * FROM `tbl_order`  WHERE customer_id = $id ";
    $m_result = mysqli_query($db->connection, $query);
    $orders = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $orders[] = $data;
        }
    }
    function addDetailProduct($arr1) {
        $db = new Database();
        $productId = $arr1["fk_product_id"] ? $arr1["fk_product_id"] : "";
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
        $arr1["product"] = $product;
        return $arr1;
    }
    function addDetailOrder($arr) {
        $db = new Database();
        $orderId = $arr["order_id"] ? $arr["order_id"] : "";
        $orderDetail = array();
        if ($orderId) {
            $queryGetProductById = "SELECT * FROM tbl_order_detail p WHERE p.order_id = {$orderId}";
            $result = mysqli_query($db->connection, $queryGetProductById);
            if ($result) {
                while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $orderDetail[] = $data;
                }
            }
        }

        $arr["orderDetail"] = $orderDetail;

        $arr["orderDetail"] = array_map("addDetailProduct", $arr["orderDetail"]);
        mysqli_close($db->connection);
        return $arr;
    }

    $orders = array_map("addDetailOrder", $orders);
    $AmountOrderDetail = count($orders);
    $pages = floor( $AmountOrderDetail / $limits ) ;
    $orders = array_slice($orders, $letPage, $limits);
    include "View/client/order.php";
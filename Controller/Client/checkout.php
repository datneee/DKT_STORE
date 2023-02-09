<?php
    if (isset($_SESSION["user"])) {
        $productCheckouts = array();
        $productId = isset($_GET['product-one']) ? $_GET['product-one'] : '';

        if ($productId) {
            $db = new Database();

            $queryGetProductById = "SELECT * FROM tbl_product p WHERE p.pk_product_id = '$productId'";
            $result = mysqli_query($db->connection, $queryGetProductById);
            $product = array();
            if ($result) {
                while ($data = mysqli_fetch_array($result)) {
                    $product = $data;
                }
            }
            $product["quantity"] = 1;
            $productCheckouts = array_merge($productCheckouts, array($_GET['product-one'] => ($product)));
        } else {
            $productCheckouts = isset($_SESSION["carts"]) ? $_SESSION["carts"] : '';
        }
        include 'View/client/checkout.php';
    } else include "Controller/Client/login.php";

?>
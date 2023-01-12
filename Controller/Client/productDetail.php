<?php

    $productId = isset($_GET['product']) ? $_GET['product'] : '';
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
        include 'View/client/productDetail.php';
    }
?>
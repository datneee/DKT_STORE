<?php
    $db = new Database();
    if (isset($_GET["action"]) == "delete") {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';
        $queryDeleteProduct = "DELETE FROM `tbl_product` WHERE pk_product_id = {$id}";
        $result = mysqli_query($db->connection, $queryDeleteProduct);
        if ($result) {
            require "Controller/admin/products/index.php";
        }
    }
    mysqli_close($db->connection);
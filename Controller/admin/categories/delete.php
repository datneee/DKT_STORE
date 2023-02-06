<?php
    $db = new Database();
    if (isset($_GET["action"]) == "delete") {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';
        $queryDeleteCategory = "DELETE FROM `tbl_category_product` WHERE pk_category_product_id = {$id}";
        $result = mysqli_query($db->connection, $queryDeleteCategory);
        if ($result) {
            require "index.php";
        }
    }
    mysqli_close($db->connection);
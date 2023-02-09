<?php
    if ($_SESSION["admin"]->c_role == "admin") {
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
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/categories/index.php";
    }

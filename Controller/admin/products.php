<?php
    $db = new Database();
    $query = "SELECT * FROM `tbl_product` c";
    $m_result = mysqli_query($db->connection, $query);
    $products = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $products[] = $data;
        }
    }
    if (isset($_GET["action"]) && $_GET["action"] == "edit")
        include "Controller/admin/editProduct.php";
    else
        include "View/admin/product/products.php";
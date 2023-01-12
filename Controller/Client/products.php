<?php

    $db = new Database();

    $limits = 8;
    $products = array();
    $paging = isset($_GET["pagination"]) ? $_GET["pagination"]  + 1 : 1;
    $letPage = isset($_GET["pagination"]) ? $_GET["pagination"] * $limits + 1 : 1;
    $categoryId = isset($_GET["category"]) ? $_GET["category"] : -1;

    $queryGetCategoryById = "SELECT * FROM `tbl_category_product` u WHERE u.pk_category_product_id = '$categoryId' ";
    $result = mysqli_query($db->connection, $queryGetCategoryById);
    $categorySelected = array();
    if ($result) {
        while ($data = mysqli_fetch_array($result)) {
            $categorySelected = $data;
        }
    }
    $query = "SELECT * FROM `tbl_product` WHERE fk_category_product_id = $categoryId ORDER BY pk_product_id; ";
    $m_result = mysqli_query($db->connection, $query);
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $products[] = $data;
        }
    }

    $AmountProductInCategory = count($products);

    $pages = floor( $AmountProductInCategory / $limits ) ;
    $products = array_slice($products, $letPage, $limits);


    mysqli_close($db->connection);

    include 'View/client/products.php';
?>
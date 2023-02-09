<?php
    $db = new Database();
    $searchValue = isset($_GET["query"]) ? $_GET["query"] : '';
    $limits = 8;
    $products = array();
    $paging = isset($_GET["pageSearch"]) ? $_GET["pageSearch"]  + 1 : 1;
    $letPage = isset($_GET["pageSearch"]) ? $_GET["pageSearch"] * $limits + 1 : 1;
    $queryGetProductsSearching = "SELECT * FROM tbl_product p WHERE p.c_name LIKE '%$searchValue%' ORDER BY p.pk_product_id ";

    $result = mysqli_query($db->connection, $queryGetProductsSearching);
    $productSearched = array();
    while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $productSearched[] = $data;
    }
    $AmountProductInCategory = count($productSearched);

    $pages = floor( $AmountProductInCategory / $limits ) ;
    $productSearched = array_slice($productSearched, $letPage, $limits);
    include "View/client/search.php";
?>
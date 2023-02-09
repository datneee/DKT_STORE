<?php


    $db = new Database();
    $connection = $db->connection;
    $limits = 6;
    $page = isset($_GET["newPage"]) ? $_GET["newPage"] : 1;
    $paging = isset($_GET["newPage"]) ? $_GET["newPage"] + 1 : 1;
    $letPage = isset($_GET["newPage"]) ? $_GET["newPage"] * $limits + 1 : 1;
    $query = "SELECT * FROM `tbl_news` ORDER BY pk_news_id";
    $m_result = mysqli_query($connection, $query);
    $news = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $news[] = $data;
        }
    }

    $AmountProductInCategory = count($news);
    $pages = floor( $AmountProductInCategory / $limits );
    $news = array_slice($news, $letPage, $limits);
    mysqli_close($connection);
    include "View/client/tinTuc.php";

?>
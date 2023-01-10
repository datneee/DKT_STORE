<?php
    $hostname = "localhost";
    $username = "user_dktStore";
    $password = "Pvdat14092001a@";
    $database = "dkt_Store";
    $connection = mysqli_connect($hostname, $username, $password, $database);
    if ($connection)
        mysqli_set_charset($connection, "UTF8");

    $query = "SELECT * FROM `tbl_product` c WHERE c.c_hotproduct = 1 LIMIT 4";
    $m_result = mysqli_query($connection, $query);
    $hotProducts = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $hotProducts[] = $data;
        }
    }

    mysqli_close($connection);
    include "View/client/hotProduct.php";
?>
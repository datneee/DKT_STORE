<?php
    $db = new Database();
    $connection = $db->connection;

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
<?php
    $hostname = "localhost";
    $username = "user_dktStore";
    $password = "Pvdat14092001a@";
    $database = "dkt_Store";
    $connection = mysqli_connect($hostname, $username, $password, $database);
    if ($connection)
        mysqli_set_charset($connection, "UTF8");

    $query = "SELECT * FROM `tbl_product` p JOIN `tbl_order_detail` o ON p.pk_product_id = o.fk_product_id ORDER BY o.c_number DESC LIMIT 4";
    $m_result = mysqli_query($connection, $query);
    $featuredProducts = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $featuredProducts[] = $data;
        }
    }

    mysqli_close($connection);
    include  "View/client/featuredProduct.php";
?>
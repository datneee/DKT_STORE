<?php
    $db = new Database();
    $connection = $db->connection;

    $query = "SELECT *, COUNT(c_number) FROM `tbl_product` p JOIN `tbl_order_detail` o ON p.pk_product_id = o.fk_product_id GROUP BY p.pk_product_id ORDER BY COUNT(c_number) DESC LIMIT 4";
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
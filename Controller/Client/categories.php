<?php
    $db = new Database();
    $query = "SELECT * FROM `tbl_category_product` c WHERE c.c_home = 1";
    $m_result = mysqli_query($db->connection, $query);
    $categories = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $categories[] = $data;
        }
    }

    mysqli_close($db->connection);
    include "View/client/categories.php";

?>
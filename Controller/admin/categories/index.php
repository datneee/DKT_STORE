<?php
    $db = new Database();
    $query = "SELECT * FROM `tbl_category_product` c";
    $m_result = mysqli_query($db->connection, $query);
    $categories = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $categories[] = $data;
        }
    }

    include "View/admin/category/categories.php";
<?php
    $db = new Database();
    $query = "SELECT * FROM `tbl_slide` c";
    $m_result = mysqli_query($db->connection, $query);
    $banners = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $banners[] = $data;
        }
    }
    include "View/admin/banner/banners.php";
<?php

    $db = new Database();
    $query = "SELECT * FROM `tbl_order` c";
    $m_result = mysqli_query($db->connection, $query);
    $orders = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $orders[] = $data;
        }
    }
    include "View/admin/order/orders.php";

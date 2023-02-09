<?php
    $db = new Database();
    $query = "SELECT * FROM `tbl_news` c";
    $m_result = mysqli_query($db->connection, $query);
    $news = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $news[] = $data;
        }
    }
    include "View/admin/new/news.php";
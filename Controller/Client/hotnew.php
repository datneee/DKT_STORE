<?php

    $db = new Database();
    $connection = $db->connection;

    $query = "SELECT * FROM `tbl_news` c WHERE c.c_hotnews = 1";
    $m_result = mysqli_query($connection, $query);
    $hotnews = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $hotnews[] = $data;
        }
    }

    mysqli_close($connection);
    include "View/client/hotnew.php";

?>
<?php
    $db = new Database();
    $connection = $db->connection;

    $query = "SELECT * FROM `tbl_slide`";
    $m_result = mysqli_query($connection, $query);
    $slides = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $slides[] = $data;
        }
    }
    mysqli_close($connection);
    include "View/client/Slidebanner.php";

?>
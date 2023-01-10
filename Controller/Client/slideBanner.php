<?php
    $hostname = "localhost";
    $username = "user_dktStore";
    $password = "Pvdat14092001a@";
    $database = "dkt_Store";
    $connection = mysqli_connect($hostname, $username, $password, $database);
    if ($connection)
        mysqli_set_charset($connection, "UTF8");

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
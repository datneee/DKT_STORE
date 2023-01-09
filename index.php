<?php
    $hostname = "localhost";
    $username = "user_dktStore";
    $password = "Pvdat14092001a@";
    $database = "dkt_Store";
    $connection = mysqli_connect($hostname, $username, $password, $database);
    if ($connection)
        mysqli_set_charset($connection, "UTF8");

    if ($_SESSION["username"] != null) {
        if ($_SESSION["role"] == "client") {
            include "View/client/layout.php";
        } else
            include "View/admin/layout.php";
    } else {
        include "View/admin/login.php";
    }
    //$db = new Database();

    //echo $db->execute("SELECT * FROM `tbl_user`");


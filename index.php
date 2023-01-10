<?php

    session_start();
    require_once (__DIR__."/Config/config.php");
    require_once (__DIR__ . "/Config/router.php");



    include "View/client/layout.php";
    /*if ($_SESSION["username"] != null) {
        if ($_SESSION["role"] == "client") {
            include "View/client/content_layout.php";
        } else
            include "View/admin/content_layout.php";
    } else {
        include "View/admin/login.php";
    }*/
    //$db = new Database();

    //echo $db->execute("SELECT * FROM `tbl_user`");


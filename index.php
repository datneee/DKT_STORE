<?php

    session_start();
    include_once (__DIR__."/Config/config.php");
    include 'Model/DbConfig.php';
    include 'Config/router.php';

    $route = new Router();
    $route = $route->pageController;
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


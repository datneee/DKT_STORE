<?php

    session_start();
    include_once (__DIR__."/Config/config.php");
    include 'Model/DbConfig.php';
    include 'Config/router.php';

    $route = new Router();
    $route = $route->pageController;
    if ($route == "admin") {
        if (file_exists("Controller/admin/layout.php"))
            include "Controller/admin/layout.php";
    } else {
        include "View/client/layout.php";
    }



<?php

    session_start();
    include_once (__DIR__."/Config/config.php");
    include 'Model/DbConfig.php';
    /*
    include 'Config/router.php';
    $route = new Router();
    $route = $route->pageController;
    */

    $controller = parse_url(PATH)["path"];
    $controller = $controller == '/' ? "home" : $controller;
    if ($controller != "/admin" && explode("/", $controller)[1] != "admin") {
        if ($controller == "/categories")
            $controller = "products";
        if (isset($_GET["page"]))
            $controller = $_GET["page"];
        if (isset($_GET["product"]))
            $controller = "product";
        $controller = $controller != "" ? "$controller.php" : "";

        include "View/client/layout.php";

    } else {
        include "admin.php";
    }



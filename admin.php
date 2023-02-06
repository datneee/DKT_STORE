<?php
    $controller = $controller = parse_url(PATH)["path"];
    $controller = $controller == '/admin' ? "home" : $controller;
    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
        if (isset($_GET["action"])) {
            $controller = "{$controller}/{$_GET["action"]}.php";
        } else if ($controller == "logout") {
            $controller = "{$controller}.php";
        } else $controller = "{$controller}/index.php";
    }else {
        $controller = "{$controller}.php";
    }
    if(isset($_SESSION["admin"])) {
        require "Controller/admin/layout.php";
    } else require "Controller/admin/login.php";
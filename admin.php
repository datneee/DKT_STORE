<?php
    $controller = $controller = parse_url(PATH)["path"];
    $controller = $controller == '/admin' ? "home" : $controller;
    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
        if (isset($_GET["action"])) {
            $controller = "{$controller}/{$_GET["action"]}.php";
        } else $controller = "{$controller}/index.php";
    }else {
        $controller = "{$controller}.php";
    }
    include "Controller/admin/layout.php";
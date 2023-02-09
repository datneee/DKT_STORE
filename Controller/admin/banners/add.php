<?php

    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $category = null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cName = $_POST["txtCateName"];
            $fileName = $_FILES["fImages"]["name"];

            $currentDir = $_FILES["fImages"]["tmp_name"];
            $newFile = explode(".", $fileName)[0] . uniqid() . "." . explode(".", $fileName)[1];
            $uploadDir = "public/frontend/images/".$newFile;
            if (move_uploaded_file($currentDir, $uploadDir)) {
                $queryCreateBanner = "INSERT INTO `tbl_slide` (`c_name`, `c_img`) VALUES ('{$cName}', '{$newFile}' ) ";
                $result = mysqli_query($db->connection, $queryCreateBanner);
                if ($result) {
                    echo "<script type='text/javascript'>alert('Create banner successfully !')</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Error !')</script>";
                }
            }
        }

        mysqli_close($db->connection);
        include "View/admin/banner/create.php";
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/banners/index.php";
    }
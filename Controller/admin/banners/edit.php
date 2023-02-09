<?php
    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $banner = null;
        if ($id) {

            $queryGetSliderById = "SELECT * FROM tbl_slide p WHERE p.pk_slide_id = {$id}";
            $result = mysqli_query($db->connection, $queryGetSliderById);
            if ($result) {
                while ($data = mysqli_fetch_object($result)) {
                    $banner = $data;
                }
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cName = $_POST["txtBannerName"];
            $fileName = $_FILES["fImages"]["name"];

            $currentDir = $_FILES["fImages"]["tmp_name"];
            /* $i = 0;
             $newFile = $fileName;
             while (file_exists("public/upload/product/{$newFile}")) {
                 $newFile = explode(".", $newFile)[0] . "($i)" . explode(".", $newFile)[1];
                 $i++;
             }*/
            $uploadDir = '';
            $queryUpdateBanner = "";
            if ($fileName) {
                $newFile = explode(".", $fileName)[0] . uniqid() . "." . explode(".", $fileName)[1];
                $uploadDir = "public/frontend/images/".$newFile;
                $upload = move_uploaded_file($currentDir, $uploadDir);
                $queryUpdateBanner = "UPDATE `tbl_slide` tcp SET tcp.c_name = '{$cName}', tcp.c_img = '{$newFile}' WHERE tcp.pk_slide_id = {$id} ";

            } else {
                $queryUpdateBanner = "UPDATE `tbl_slide` tcp SET tcp.c_name = '{$cName}' WHERE tcp.pk_slide_id = {$id} ";

            }
            $result = mysqli_query($db->connection, $queryUpdateBanner);

            if ($result) {
                echo "<script type='text/javascript'>alert('Edit banner successfully !')</script>";
            } else {
                echo "<script type='text/javascript'>alert('Error !')</script>";
            }
        }

        mysqli_close($db->connection);
        include "View/admin/banner/edit.php";
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/banners/index.php";
    }
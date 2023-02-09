<?php
    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        if (isset($_GET["action"]) == "delete") {
            $id = isset($_GET["id"]) ? $_GET["id"] : '';
            $queryDeleteBanner = "DELETE FROM `tbl_slide` WHERE pk_slide_id = {$id}";
            $result = mysqli_query($db->connection, $queryDeleteBanner);
            if ($result) {
                require "Controller/admin/banners/index.php";
            }
        }
        mysqli_close($db->connection);
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/banners/index.php";
    }

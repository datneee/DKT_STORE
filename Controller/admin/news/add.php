<?php
    if ($_SESSION["admin"]->c_role == "admin") {
        $db = new Database();
        $id = isset($_GET["id"]) ? $_GET["id"] : "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cName = $_POST["txtNewName"];
            $cDes = $_POST["txtNewDes"];
            $cCont = $_POST["txtNewCont"];
            $cHot = $_POST["rdoStatus"];
            $fileName = $_FILES["fImages"]["name"];

            $currentDir = $_FILES["fImages"]["tmp_name"];
            $newFile = explode(".", $fileName)[0] . uniqid() . "." . explode(".", $fileName)[1];
            $uploadDir = "public/upload/news/" . $newFile;
            if (move_uploaded_file($currentDir, $uploadDir)) {
                $queryCreateNew = "INSERT INTO `tbl_news` (`c_name`, `c_description`, `c_content`, `c_img`, `c_hotnews`) VALUES ('{$cName}','{$cDes}', '{$cCont}', '{$newFile}', {$cHot} ) ";
                $result = mysqli_query($db->connection, $queryCreateNew);
                if ($result) {
                    echo "<script type='text/javascript'>alert('Create new successfully !')</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Error !')</script>";
                }
            }
        }

        mysqli_close($db->connection);
        include "View/admin/new/create.php";
    } else {
        echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
        require "Controller/admin/news/index.php";
    }
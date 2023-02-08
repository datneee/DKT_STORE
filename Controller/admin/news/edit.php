<?php
if ($_SESSION["admin"]->c_role == "admin") {
    $db = new Database();
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $new = null;
    if ($id) {

        $queryGetNewById = "SELECT * FROM tbl_news p WHERE p.pk_news_id = {$id}";
        $result = mysqli_query($db->connection, $queryGetNewById);
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $new = $data;
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cName = $_POST["txtNewName"];
        $cDes = $_POST["txtNewDes"];
        $cCont = $_POST["txtNewCont"];
        $cHot = $_POST["rdoStatus"];

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
            $uploadDir = "public/upload/news/".$newFile;
            $upload = move_uploaded_file($currentDir, $uploadDir);
            $queryUpdateNew = "UPDATE `tbl_news` tcp SET tcp.c_name = '{$cName}',tcp.`c_description` = '{$cDes}', tcp.`c_content` = '{$cCont}', tcp.c_img = '{$newFile}', tcp.`c_hotnews` = {$cHot} WHERE tcp.pk_news_id = {$id} ";

        } else {
            $queryUpdateNew = "UPDATE `tbl_news` tcp SET tcp.c_name = '{$cName}',tcp.`c_description` = '{$cDes}', tcp.`c_content` = '{$cCont}', tcp.`c_hotnews` = {$cHot} WHERE tcp.pk_news_id = {$id} ";

        }
        $result = mysqli_query($db->connection, $queryUpdateNew);

        if ($result) {
            echo "<script type='text/javascript'>alert('Edit new successfully !')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error !')</script>";
        }
    }

    mysqli_close($db->connection);
    include "View/admin/new/edit.php";
} else {
    echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
    require "Controller/admin/news/index.php";
}
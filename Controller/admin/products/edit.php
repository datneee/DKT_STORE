<?php
if ($_SESSION["admin"]->c_role == "admin") {
    $db = new Database();
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $product = null;
    $message = '';
    $error = '';
    if ($id) {

        $queryGetListcategory = "SELECT * FROM `tbl_category_product` c";
        $m_result = mysqli_query($db->connection, $queryGetListcategory);
        $categories = array();
        if ($m_result) {
            while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
                $categories[] = $data;
            }
        }

        $queryGetProductById = "SELECT * FROM tbl_product p WHERE p.pk_product_id = {$id}";
        $result = mysqli_query($db->connection, $queryGetProductById);
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $product = $data;
            }
        }
    }
    $upload = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cate = $_POST["category"];
        $cName = $_POST["txtName"];
        $cHot = $_POST["rdoStatus"];
        $cDes = $_POST["txtDes"];
        $cCont = $_POST["txtContent"];
        $cPrice = (int)$_POST["txtPrice"];

        $fileName = $_FILES["fImages"]["name"];
        $currentDir = $_FILES["fImages"]["tmp_name"];
        $uploadDir = '';
        $queryUpdateProduct = "";
        if ($fileName) {
            $newFile = explode(".", $fileName)[0] . uniqid() . "." . explode(".", $fileName)[1];
            $uploadDir = "public/upload/product/".$newFile;
            $upload = move_uploaded_file($currentDir, $uploadDir);
            $queryUpdateProduct = "UPDATE `tbl_product` tp SET tp.fk_category_product_id = {$cate}, tp.`c_name` = '{$cName}', tp.`c_description` = '{$cDes}', tp.`c_content` = '{$cCont}' , tp.`c_img` = '{$newFile}', tp.`c_price` = {$cPrice}, tp.`c_hotproduct` = {$cHot} WHERE tp.`pk_product_id` = {$id}";

        } else {
            $queryUpdateProduct = "UPDATE `tbl_product` tp SET tp.fk_category_product_id = {$cate}, tp.`c_name` = '{$cName}', tp.`c_description` = '{$cDes}', tp.`c_content` = '{$cCont}',  tp.`c_price` = {$cPrice}, tp.`c_hotproduct` = {$cHot} WHERE tp.`pk_product_id` = {$id}";
        }
        $result = mysqli_query($db->connection, $queryUpdateProduct);

        if ($result) {
            echo "<script type='text/javascript'>alert('Edit product successfully !')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error !')</script>";
        }

    }
    mysqli_close($db->connection);
    include "View/admin/product/edit.php";
} else {
    echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
    require "Controller/admin/products/index.php";
}
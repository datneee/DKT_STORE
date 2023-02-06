<?php
    $db = new Database();
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $category = null;
    $message = '';
    $error = '';
    if ($id) {

        $queryGetProductById = "SELECT * FROM tbl_category_product p WHERE p.pk_category_product_id = {$id}";
        $result = mysqli_query($db->connection, $queryGetProductById);
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $category = $data;
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cName = $_POST["txtCateName"];
        $cDes = $_POST["txtDes"];
        $um = (int)$_POST["rdoStatus"];
        $queryUpdateCategory = "UPDATE `tbl_category_product` tcp SET tcp.c_name = '{$cName}', tcp.c_description = '{$cDes}', tcp.c_home = {$um} WHERE tcp.pk_category_product_id = {$id} ";

        $result = mysqli_query($db->connection, $queryUpdateCategory);
        if ($result) {
            $message = "Update category successfully !";
        } else {
            $error = "Error when update ...";
        }
    }

    mysqli_close($db->connection);
    include "View/admin/category/edit.php";
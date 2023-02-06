<?php
    $db = new Database();
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $category = null;
    $message = '';
    $error = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cName = $_POST["txtCateName"];
        $cDes = $_POST["txtDes"];
        $um = (int)$_POST["rdoStatus"];
        $queryCreateCategory = "INSERT INTO `tbl_category_product` (`c_name`,`c_description`, `c_home`) VALUES ('{$cName}', '{$cDes}',{$um} ) ";
        echo $queryCreateCategory;
        $result = mysqli_query($db->connection, $queryCreateCategory);
        if ($result) {
            $message = "Create category successfully !";
        } else {
            $error = "Error when create ...";
        }
    }

    mysqli_close($db->connection);
    include "View/admin/category/create.php";
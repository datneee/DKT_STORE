<?php
if ($_SESSION["admin"]->c_role == "admin") {
    $db = new Database();
    if (isset($_GET["action"]) == "delete") {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';
        $queryDeleteNew = "DELETE FROM `tbl_news` WHERE pk_news_id = {$id}";
        $result = mysqli_query($db->connection, $queryDeleteNew);
        if ($result) {
            require "Controller/admin/news/index.php";
        }
    }
    mysqli_close($db->connection);
} else {
    echo "<script type='text/javascript'>alert('Have not authorization !')</script>";
    require "Controller/admin/news/index.php";
}

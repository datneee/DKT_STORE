<?php
    if(isset($_SESSION["admin"])) {
        include "View/admin/layout.php";
    } else {
        include "Controller/admin/login.php";
    }
?>
<?php
    unset($_SESSION["username"]);
    unset($_SESSION["customerId"]);
    unset($_SESSION["user"]);
    header("location:index.php");
?>
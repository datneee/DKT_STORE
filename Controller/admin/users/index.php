<?php
    $db = new Database();
    $query = "SELECT * FROM `tbl_user` c";
    $m_result = mysqli_query($db->connection, $query);
    $users = array();
    if ($m_result) {
        while ($data = mysqli_fetch_array($m_result, MYSQLI_ASSOC)) {
            $users[] = $data;
        }
    }
    include "View/admin/user/users.php";
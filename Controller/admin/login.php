<?php
    class Login {


        public function login($username, $password) {

            $query = "SELECT * FROM `tbl_user` u WHERE u.c_username = $username AND u.c_password = $password";


        }

    }
?>
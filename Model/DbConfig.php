<?php
    class Database {
        private $hostname = "localhost";
        private $username = "user_dktStore";
        private $password = "Pvdat14092001a@";
        private $database = "dkt_Store";
        private $connection = NULL;
        private $result = NULL;

        public function __construct()
        {
            $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
            if ($this->connection) {
                mysqli_set_charset($this->connection, 'utf8');
            }
        }
    }
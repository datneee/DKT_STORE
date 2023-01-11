<?php

    class Router {

        public $pageController;
        public function __construct()
        {
            while (!$this->pageController == "404") {
                if (URL == "/" || URL == "/index.php") {
                    $this->pageController = "home";
                    break;
                }
                if (explode('?',PATH)[0] == '/categories') {
                    if (isset($_GET["category"])) {
                        $this->pageController =  $_GET["category"];
                        break;
                    }
                }
                if (isset($_GET["page"])) {
                    $this->pageController =  $_GET["page"] ;
                } else {
                    $this->pageController = "404";
                }
            }

        }

    }
?>
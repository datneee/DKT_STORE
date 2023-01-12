<?php

    class Router {

        public $pageController;
        public function __construct()
        {
            while (!$this->pageController == "404") {

                if (URL == "/" || URL == "/index.php" || URL == "/index.html") {
                    $this->pageController = "home";
                    break;
                } else if (isset($_GET["product"])) {
                    $this->pageController = "product";
                    break;
                } else if (URL == "/introduction") {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "gioi-thieu";
                    }

                    break;
                }else if (URL == "/contact") {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "contact";
                    }
                    break;
                } else if (explode('?',PATH)[0] == '/news' || URL == "/news") {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "tin-tuc";
                    }
                    break;
                } else if (explode('?',PATH)[0] == '/categories') {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else if (isset($_GET["product"])) {
                        $this->pageController =  "product" ;
                    }else {
                        $this->pageController = "categories";
                    }
                    break;
                } else if (explode('?',PATH)[0] == '/search') {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "search";
                    }
                    break;
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
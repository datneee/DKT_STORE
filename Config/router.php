<?php

    class Router {

        public $pageController;
        public function __construct()
        {
            while (!$this->pageController == "404" ) {

                if (URL == "/admin" || explode('?',PATH)[0] == '/admin' || explode('/',PATH)[1] == 'admin') {
                    if (isset($_GET["action"])) {
                        $this->pageController =  $_GET["action"];
                    } else {
                        $this->pageController = "admin";
                    }
                    break;
                }
                if (URL == "/" || URL == "/index.php" || URL == "/index.html" || explode('?',PATH)[0] == '/index.html' || explode('?',PATH)[0] == '/index.php' || explode('?',PATH)[0] == '/home') {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    } else if (isset($_GET["product"])) {
                        $this->pageController = "product";
                    } else
                        $this->pageController = "home";
                    break;
                } else if (URL == "/introduction") {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "gioi-thieu";
                    }
                    break;

                }else if (URL == "/checkout" || explode('?',PATH)[0] == '/checkout') {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "checkout";
                    }
                    break;
                }else if (URL == "/checkout-submit" || explode('?',PATH)[0] == '/checkout-submit') {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "checkout-submit";
                    }

                    break;
                } else if (URL == "/contact") {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    }else {
                        $this->pageController = "contact";
                    }
                    break;

                } else if (explode('?',PATH)[0] == "/cart" || URL == "/cart") {
                    if (isset($_GET["page"])) {
                        $this->pageController =  $_GET["page"] ;
                    } else {
                        $this->pageController = "cart";
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
                    }elseif (isset($_GET["product"])) {
                        $this->pageController =  "product" ;
                    }else {
                        $this->pageController = "search";
                    }
                    break;
                }
                if (isset($_GET["page"])) {
                    $this->pageController =  $_GET["page"] ;
                    break;
                } else {
                    $this->pageController = "404";
                    break;
                }
            }

        }

    }
?>
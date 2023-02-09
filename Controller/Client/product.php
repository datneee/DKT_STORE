<?php

    $productId = isset($_GET['product']) ? $_GET['product'] : '';
    if ($productId) {
        $db = new Database();

        $queryGetProductById = "SELECT * FROM tbl_product p WHERE p.pk_product_id = '$productId'";
        $result = mysqli_query($db->connection, $queryGetProductById);
        $product = array();
        if ($result) {
            while ($data = mysqli_fetch_array($result)) {
                $product = $data;
            }
        }
        $message = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_SESSION["user"])) {
                $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : '';
                if ($quantity) {
                    if (!empty($_SESSION['carts'])) {

                        $checkItemExist = in_array($_GET['product'], array_values(array_column(($_SESSION['carts']), 'pk_product_id')));
                        if ($checkItemExist) {
                            foreach ($_SESSION['carts'] as $key => $value) {
                                echo $value['pk_product_id'];
                                if ($value['pk_product_id'] == $_GET['product']) {
                                    if (empty($_SESSION['carts'][$key]['quantity'])) {
                                        $_SESSION['carts'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['carts'][$key]['quantity'] += $quantity;
                                }
                            }

                        } else {
                            $product['quantity'] = $quantity;
                            $_SESSION["carts"] = array_merge($_SESSION["carts"], array($_GET['product'] => ($product)));
                        }
                    } else {
                        $_SESSION['carts'] = array();
                        $product["quantity"] = $quantity;
                        $_SESSION["carts"] = array_merge($_SESSION["carts"], array($_GET['product'] => ($product)));
                    }
                    $message = "Thêm thành công sản phẩm vào giỏ hàng !";
                    header("location:cart");
                }
            } else include "Controller/client/login.php";
        }
        include 'View/client/productDetail.php';
    }
?>
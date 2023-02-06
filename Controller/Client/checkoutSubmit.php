<?php
if (isset($_SESSION["user"])) {
        $db = new Database();

        $message = '';
        $orders = array();
        $sumPrice = 0;
        if (isset($_GET["product-one"])) {
            $productId = $_GET["product-one"];
            $queryGetProductById = "SELECT * FROM tbl_product p WHERE p.pk_product_id = '$productId'";
            $result = mysqli_query($db->connection, $queryGetProductById);
            $product = array();
            if ($result) {
                while ($data = mysqli_fetch_array($result)) {
                    $product = $data;
                }
            }
            $product["quantity"] = 1;

            $orders = array_merge($orders, array($_GET["product-one"] => ($product)));
        } else {

            $orders = isset($_SESSION['carts']) ? $_SESSION['carts'] : null;
        }
        $checkOut = true;
        if ($orders) {
            foreach ($orders as $order) {
                $sumPrice += $order["c_price"] * $order["quantity"];
            }
            // Thêm đơn order
            $cusId = $_SESSION["customerId"];
            $date = date("Y-m-d");
            $lastOrderId = null;
            $queryInsertOrder = "INSERT INTO `tbl_order`(`customer_id`, `ngaymua`, `gia`, `trangthai`) VALUES ('$cusId', '$date', '$sumPrice', 0 ) ";
            $result = mysqli_query($db->connection, $queryInsertOrder);
            if ($result) {
                $lastOrderId = mysqli_insert_id($db->connection);
            } else {
                $checkOut = false;
            }


            // Thêm chi tiết order
            foreach ($orders as $cartItem) {
                $itemId = $cartItem['pk_product_id'];
                $itemQuantity = $cartItem['quantity'];
                $queryInsertOrderDetails = "INSERT INTO `tbl_order_detail` (`order_id`, `fk_product_id`, `c_number`) VALUES ('$lastOrderId', '$itemId', '$itemQuantity')";

                $result = mysqli_query($db->connection, $queryInsertOrderDetails);
                if (!$result) {
                    $checkOut = false;
                }
            }
            if ($checkOut) {
                unset($_SESSION['carts']);
                $message = "Đơn hàng của bạn đã được gửi đi, đang chờ confirm từ người bán ...";
            } else {
                $message = "Đã xảy ra lỗi trong khi thanh toán, vui lòng thử lại !";
            }
        }
        include 'View/client/checkoutSubmit.php';
    } else include "Controller/Client/login.php";
?>

<?php
    if (isset($_SESSION["username"])) {
        $db = new Database();
        /*$user_email = $_SESSION["username"];
        $queryGetUserByUsername = "SELECT * FROM `tbl_customer` u WHERE u.email = '$user_email' ";
        $result = mysqli_query($db->connection, $queryGetUserByUsername);
        $user = null;
        if ($result) {
            while ($data = mysqli_fetch_object($result)) {
                $user = $data;
            }
        }
        $userId = $user->customer_id;
        $querySelectOrder = "SELECT * FROM `tbl_order` o JOIN `tbl_order_detail` d ON o.order_id = d.order_id JOIN `tbl_product` p ON d.fk_product_id = p.pk_product_id WHERE o.customer_id = $userId GROUP BY d.fk_product_id";
        $resultOrder = mysqli_query($db->connection, $querySelectOrder);
        $orders = array();

        if ($resultOrder) {
            while ($data = mysqli_fetch_array($resultOrder)) {
                $orders[] = $data;
            }
        }
        */
        $orders = isset($_SESSION['carts']) ? $_SESSION['carts']: null ;
        $sumPrice = 0;
        if ($orders) {
            foreach ($orders as $order) {
                $sumPrice += $order["c_price"] * $order["quantity"];
            }
            $action = isset($_GET['action']) ? $_GET['action'] : '';
            if (!empty($action)) {
                switch ($action) {
                    case "update":
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            foreach ($_SESSION['carts'] as $key => $value) {
                                if ($value["quantity"] != $_POST[$value["pk_product_id"]]) {
                                    $_SESSION['carts'][$key]["quantity"] = $_POST[$value["pk_product_id"]];
                                }
                            }
                        }
                        break;
                    case "delete":
                        $cartItemWillDelete = isset($_GET['code']) ? $_GET['code'] : '';
                        if ($cartItemWillDelete != '') {
                            foreach ($_SESSION['carts'] as $key => $value) {
                                if ($value['pk_product_id'] == $cartItemWillDelete) {
                                    unset($_SESSION['carts'][$key]);
                                }
                            }
                        }
                        break;
                    case "destroy":
                        unset($_SESSION['carts']);
                        break;
                    default:
                        break;
                }
                header("location:cart");
            }
        }

        mysqli_close($db->connection);
        include 'View/client/cart.php';

    }
?>
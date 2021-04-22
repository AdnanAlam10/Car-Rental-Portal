<?php
    session_start();

    function isLoggedIn() {
        if (isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }

    function isCartEmpty() {
        if (!isset($_SESSION['cart-items'])) {
            return true;
        } else {
            return false;
        }
    }

    function deleteCar($id) {
        unset($_SESSION['cart-items'][$id]);
    }
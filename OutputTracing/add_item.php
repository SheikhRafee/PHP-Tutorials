<?php
if (!isset($_COOKIE['cart'])) {
    setcookie('cart', 1, time() + 3600, '/');
} else {
    setcookie('cart', $_COOKIE['cart'] + 1, time()
        + 3600, '/');
}
header("Location: cart.php");
?>
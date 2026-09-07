<html>

<body>
    <?php
    if (isset($_COOKIE['cart'])) {
        echo "<p>Items in your cart: " . $_COOKIE['cart'] .
            "</p>";
    } else {
        echo "Your cart is empty.";
    }
    ?>
    <button><a href="add_item.php">Add Item</a></button>
</body>

</html>

<!-- Your cart is empty -->
<!-- Items in your cart: 1 -->
 <!-- Items in your cart: 2 -->
<!-- Items in your cart: 4 -->
 <!-- Items in your cart: 4 -->
 <!-- Items in your cart: 5 -->

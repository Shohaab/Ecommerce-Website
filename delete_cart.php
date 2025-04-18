<?php
session_start(); // Start the session

if (isset($_POST['product_id'])) {
    $productId = intval($_POST['product_id']);

    // Remove product from session cart
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}

header('Location: cart.php'); // Redirect back to cart
exit;
?>

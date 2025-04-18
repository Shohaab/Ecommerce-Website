<?php
session_start();

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) === 0) {
    echo "<h2>Your cart is empty.</h2>";
    echo "<a href='products.php'>Go Back to Products</a>";
    exit;
}

// Optional: Calculate total
$total = 0;
foreach ($_SESSION['cart'] as $product) {
    $total += $product['price'] * $product['quantity'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        .checkout-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .checkout-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .checkout-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .checkout-item:last-child {
            border-bottom: none;
        }

        .total {
            font-weight: bold;
            margin-top: 20px;
            font-size: 18px;
            text-align: right;
        }

        .btn-confirm {
            display: block;
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 12px;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            margin-top: 30px;
            cursor: pointer;
        }

        .btn-confirm:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <h2>Checkout</h2>

    <?php
    foreach ($_SESSION['cart'] as $product) {
        echo "<div class='checkout-item'>";
        echo "<p><strong>{$product['name']}</strong> (x{$product['quantity']})</p>";
        echo "<p>Price: \$" . number_format($product['price'], 2) . "</p>";
        echo "</div>";
    }

    echo "<p class='total'>Total: \$" . number_format($total, 2) . "</p>";
    ?>

    <!-- Simulate place order -->
    <form method="POST" action="place_order.php">
        <button type="submit" class="btn-confirm">Place Order</button>
    </form>
</div>

</body>
</html>

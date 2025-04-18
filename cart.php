<?php
session_start(); // Start the session

$host = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = intval($_POST['product_id']);

    // Fetch product details from the database
    $sql = "SELECT * FROM product_item WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();

        // Add product to session cart
        if (isset($_SESSION['cart'][$productId])) {
            // If product already in cart, increase quantity
            $_SESSION['cart'][$productId]['quantity'] += 1;
        } else {
            // Otherwise, add it to the cart
            $_SESSION['cart'][$productId] = [
                'name' => $product['Name'],
                'price' => $product['price'],
                'img' => $product['img'],
                'quantity' => 1
            ];
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .cart-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-item .item-details {
            flex: 1;
            margin-left: 20px;
        }

        .item-name {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .item-price {
            color: #28a745;
            font-size: 14px;
        }

        .quantity {
            display: inline-block;
            width: 40px;
            text-align: center;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .cart-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }
        .cart-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<h2 style="text-align:center; margin-bottom: 30px;">Your Cart</h2>

<div class="cart-container">
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $productId => $product) {
            echo "<div class='cart-item'>";
            echo "<img src='Uploads/{$product['img']}' alt='Product'>";
echo "<div class='item-details'>";
echo "<p class='item-name'>{$product['name']}</p>";   // <-- fixed here
echo "<p class='item-price'>\${$product['price']}</p>";
echo "<p>Quantity: {$product['quantity']}</p>";

            echo "</div>";

            // Option to remove product from cart
            echo "<form method='POST' action='delete_cart.php'>";
            echo "<input type='hidden' name='product_id' value='$productId'>";
            echo "<button type='submit' class='cart-btn'>Remove</button>";
            echo "</form>";

            echo "</div>";
        }

        // Checkout or clear cart button
        echo "<div style='text-align:center; margin-top: 20px;'>";
        echo "<a href='checkout.php' class='cart-btn' style='background-color: #28a745;'>Proceed to Checkout</a>";
        echo "</div>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
</div>

</body>
</html>

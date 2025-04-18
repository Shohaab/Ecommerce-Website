<?php
session_start();
unset($_SESSION['cart']); // Clear the cart after placing the order
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Placed</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .confirmation-box {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
        }

        .confirmation-box h1 {
            color: #28a745;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .confirmation-box p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn-shop {
            background-color:rgb(0, 255, 76);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-shop:hover {
            background-color:rgb(0, 179, 78);
        }
    </style>
</head>
<body>

<div class="confirmation-box">
    <h1>Thank You!</h1>
    <p>Your order has been placed successfully.</p>
    <a href="products.php" class="btn-shop">Continue Shopping</a>
</div>

</body>
</html>

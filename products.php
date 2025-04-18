<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 6;

$sql = "SELECT * FROM product_item LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            background-color: #fff;
            width: 250px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px;
            transition: transform 0.3s ease;
            text-align: center;
        }

        .product-card:hover {
            transform: scale(1.03);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-card h3 {
            font-size: 18px;
            margin: 10px 0 5px;
            color: #333;
        }

        .product-card p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }


        .cart-btn {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 15px;
    margin-top: 10px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}
.cart-btn:hover {
    background-color: #218838;
}


        @media (max-width: 600px) {
            .product-card {
                width: 90%;
            }
        }




    </style>
</head>
<body>

<h2 style="text-align:center; margin-bottom: 30px;">Explore Our Products</h2>

<div class="product-grid">
<?php
while ($row = $result->fetch_assoc()) {
    $imagePath = "Uploads/" . $row['img'];
    echo "<div class='product-card'>";
    echo "<img src='" . $imagePath . "' alt='Product Image'>";
    echo "<h3>" . $row['Name'] . "</h3>";
    echo "<p><strong>Price:</strong> $" . $row['price'] . "</p>";
    echo "<p>" . $row['description'] . "</p>";

    echo "<form method='POST' action='cart.php'>";
    echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
    echo "<button type='submit' class='cart-btn'>Add to Cart</button>";
    echo "</form>";



    echo "</div>";


}
?>
</div>

</body>
</html>

<?php
$conn->close();
?>



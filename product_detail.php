<?php
// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'products');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product ID from URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch product details from database
$sql = "SELECT name, description, price, image FROM products_t WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

// Close connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?></title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .detail-container {
            display: flex;
            width: 80%;
            max-width: 900px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .image-section {
            flex: 1;
            text-align: center;
        }
        .image-section img {
            max-width: 100%;
            border-radius: 10px;
        }
        .info-section {
            flex: 1;
            padding: 20px;
        }
        .info-section h2 {
            margin: 0 0 10px;
            font-size: 24px;
        }
        .info-section p {
            font-size: 16px;
            color: #666;
        }
        .info-section h3 {
            color: #ff6600;
            font-size: 20px;
            margin: 10px 0;
        }
        .buttons {
            margin-top: 20px;
        }
        .buttons button {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
            border-radius: 5px;
        }
        .buttons button:hover {
            background-color: #e55b00;
        }
    </style>
</head>
<body>
    <div class="detail-container">
        <div class="image-section">
            <img src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
        </div>
        <div class="info-section">
            <h2><?php echo htmlspecialchars($product['product_name']); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>
            <h3><?php echo number_format($product['price'], 2); ?> PKR</h3>
            <div class="buttons">
                <button class="add-to-cart">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>
</body>
</html>

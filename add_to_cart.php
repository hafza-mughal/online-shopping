<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            flex-wrap: wrap;
        }
        .product-card {
            width: 250px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
            padding: 15px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 350px;
            margin: 10px;
        }
        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            transition: transform 0.3s ease-in-out;
        }
        .product-card img:hover {
            transform: scale(0.9);
        }
        .sale-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: orange;
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
        .product-price {
            color: green;
            font-size: 18px;
            font-weight: bold;
        }
        .original-price {
            text-decoration: line-through;
            color: gray;
            font-size: 14px;
            margin-left: 5px;
        }
        .buttons {
            margin-top: auto;
        }
        .buttons button {
            background: green;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 14px;
            margin: 5px;
            border-radius: 5px;
        }
        .buttons button.view-detail {
            background: #28a745;
        }
        .buttons button.add-to-cart {
            background: #007bff;
        }
    </style>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "products");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM products_t";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product-card">';
            if (!empty($row['discount_price']) && $row['price'] > $row['discount_price']) {
                $discount = round((($row['price'] - $row['discount_price']) / $row['price']) * 100);
                echo '<span class="sale-badge">' . $discount . '% OFF</span>';
                echo '<img src="' . $row['image_path'] . '" alt="' . $row['name'] . '">' ;
                echo '<div class="product-title">' . $row['product_name'] . '</div>';
                echo '<div>';
                echo '<span class="product-price">$' . $row['discount_price'] . '</span>';
                echo '<span class="original-price">$' . $row['price'] . '</span>';
                echo '</div>';
            } else {
                echo '<img src="' . $row['image_path'] . '" alt="' . $row['product_name'] . '">' ;
                echo '<div class="product-title">' . $row['product_name'] . '</div>';
                echo '<div>';
                echo '<span class="product-price">$' . $row['price'] . '</span>';
                echo '</div>';
            }
            echo '<div class="buttons">';
            echo '<button class="view-detail">View Detail</button>';
            echo '<button class="add-to-cart">Add to Cart</button>';
            echo '</div></div>';
        }
    } else {
        echo "No products available.";
    }
    $conn->close();
    ?>
</body>
</html>

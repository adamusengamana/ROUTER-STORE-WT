<?php
// Retrieve the selected product's ID from the URL
$productId = $_GET['id'];

// Check if the ID is valid
if (isset($productList[$productId])) {
    $product = $productList[$productId];
    echo '<h1>' . $product[0] . '</h1>'; // Product name
    echo '<p>Price: ' . $product[1] . '</p>'; // Price
    echo '<p>Description: ' . $product[2] . '</p>'; // Description, etc.
} else {
    echo 'Product not found.';
}
?>

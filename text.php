<?php
// Read CSV data and store it in an array
$productList = [];
$csvFile = fopen('products.csv', 'r');
while (($row = fgetcsv($csvFile)) !== false) {
    $productList[] = $row;
}
fclose($csvFile);

// Display a list of products with basic information
echo '<ul>';
foreach ($productList as $index => $product) {
    echo '<li>';
    echo '<strong>' . $product[0] . '</strong>'; // Product name
    echo ' - Price: ' . $product[1]; // Price
    echo ' (<a href="test.php?id=' . $index . '">View Details</a>)'; // Link to view details
    echo '</li>';
}
echo '</ul>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="cart-body">
    <div class="cart-card" id="reciept">
        <div class="cart-img" id="checkout-img"></div>
        <div class="cart-table">
</body>
</html>

<?php

session_start(); // Start the session

if (isset($_SESSION['formData'])) {
    echo '<h2>Review Your Order</h2>';
    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<tr><th>Product ID</th><th>Product Name</th><th>Price</th></tr>';

    $totalPrice = 0;

    foreach ($_SESSION['formData'] as $formId => $formEntries) {
        foreach ($formEntries as $entry) {
            $productName = htmlspecialchars($entry['product_name']); 
            $productPrice = htmlspecialchars($entry['product_price']); 

                $priceValue = floatval($entry['product_price']);
            $totalPrice += $priceValue; 
            echo '<tr>';
            echo '<td>' . htmlspecialchars($formId) . '</td>'; 
            echo '<td>' . $productName . '</td>';
            echo '<td><b>  ' . $productPrice . '</b></td>';
            echo '</tr>';
        }
    }

    echo '<tr><td colspan="2" style="text-align: right;"><strong>Total:</strong></td>';
    echo '<td><strong>' . htmlspecialchars(number_format($totalPrice, 2)) . '</strong></td></tr>';
    echo '</table>';
  
} 
else {
    echo '<p>No data available.</p>';
}

echo '<div class="tbl-btns"';
echo '<button><a  href="main.php">Add Items</a> </button>';
echo '<button class="checkout"><a href="checkout.php">Checkout</a></button>';
echo '</div>';
echo "</div>";
echo "</div>";



?>
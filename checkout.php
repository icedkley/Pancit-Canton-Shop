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
        <div id="thanks-card" class="cart-table">
            <div><h1>Checkout Success</h1>
            <p>Thank you for Buying 
            Pancit Canton</p>
            </div>
</body>
</html>

<?php

session_start(); // Start the session
session_destroy(); // Start the session

echo '<button class="checkout"><a href="main.php">Back to Dashboard</a></button>';

echo '</div>';


?>
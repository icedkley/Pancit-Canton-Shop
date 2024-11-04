<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added to Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="body">
    <div class="cart-card">
        <div class="cart-img"></div>
        <div class="cart-top">
    <h2>Added to Cart</h2>
</body>
</html>

<?php

session_start();


echo "<h3>";
echo $_GET['product_name'];
echo "<br>";
echo "<br>";
echo "Price: PHP " . $_GET['product_price'];
echo "</h3>";

echo "<br><button class='ok-btn'><a class='ok-link' href='main.php'>OK</a></button>";   
echo "</div>";

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if (!isset($_SESSION['formData'])) {
        $_SESSION['formData'] = [];
    }

    $formId = $_GET['form_id'];
    $postData = [];

    foreach($_GET as $key => $value){
        if($key != 'form_id'){
            $postData[$key] = htmlspecialchars($value);
        }
    }

    $_SESSION['formData'][$formId][] = $postData;



}


?>

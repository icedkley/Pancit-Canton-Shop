<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Log History</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="cart-body">
    <div class="log-cart">
    <div class="log-img"></div>
    <div class="log">
    <h1>Log History</h1>
    <div class="log-list">

</body>
</html>


<?php
function getSessionHistory() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();

    }

    return isset($_SESSION['history']) ? $_SESSION['history'] : [];
}

$history = getSessionHistory();

foreach ($history as $action) {
    echo $action . "<br>";
}

echo "</div>";
echo "<button class='back-btn'><a href='main.php'>Back to Dashboard</a></button>";
echo "</div>";
echo "</div>";

?>
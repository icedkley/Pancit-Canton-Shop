<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

include 'index.php';

$currentTimeShort = date("h:i:s A");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    logAction($_SESSION['currentUser']  . ' Logged out ' . $currentTimeShort);
    header('Location: index.php');

}



?>


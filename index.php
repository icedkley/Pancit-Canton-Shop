<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body class="body">
    <div class="card login-card">

    <h1>Login</h1>
    <p>Please Log-in</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Username: <br>
        <input type="text" name="username"><br><br>
        Password:<br>
        <input type="password" name="password"><br><br>
        <input class="submit-btn" type="submit" value="Log-in">
        <a href="register.php">Sign up</a>
    </form>
    </div>

</body>
</html>

<?php
session_start();
date_default_timezone_set('Asia/Manila');

function logAction($action){
    if(session_status() == PHP_SESSION_NONE){
        session_start(  );
    }

    if(!isset($_SESSION['history'])){
        $_SESSION['history'] = [];
    }

    $_SESSION['history'][] = $action;
}

$pdo = new PDO('sqlite:Users.db');

$statement = $pdo -> prepare('SELECT * FROM User_Tbl');
$statement -> execute();

$rows = $statement -> fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $pdo = new PDO('sqlite:Users.db');

    $statement = $pdo->prepare('SELECT * FROM User_Tbl WHERE User_Name = :username AND User_Password = :password');
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $password);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        header("Location:main.php");
        $currentTimeShort = date("h:i:s A");

        $_SESSION['currentUser'] = $username;
        logAction($_SESSION['currentUser'] . ' Logged in ' . $currentTimeShort);
        exit();
        
    } else {
        echo "<h4 style=color:red>";
        echo "Invalid username or password.";
        echo "</h4>";
    }
}




?>
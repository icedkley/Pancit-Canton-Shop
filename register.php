<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Register</title>
</head>
<body class="body">
    
<div class="card register-card">

<h1>Register</h1>
<p>Create New Account</p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Username: <br>
    <input type="text" name="create-username"><br><br>
    Password:<br>
    <input type="password" name="create-password"><br><br>
    <input class="submit-btn" type="submit" value="Create Account">
    <a href="index.php">Login</a>
</form>
</div>

</body>
</html>

<?php 

function createUserAccount($username, $password) {
    $pdo = new PDO('sqlite:Users.db');

    $statement = $pdo->prepare('SELECT * FROM User_Tbl WHERE User_Name = :username');
    $statement->bindParam(':username', $username);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        echo "<h4 style=color:red>";
        echo "Username already exists.";
        echo "</h4>";
    } else {
        // Prepare a query to create a new user account
        $statement = $pdo->prepare('INSERT INTO User_Tbl (User_Name, User_Password) VALUES (:username, :password)');
        $statement->bindParam(':username', $username);
        $statement->bindParam(':password', $password);
        $statement->execute();

        echo "<h4 style=color:green>";
        echo "Account created successfully.";
        echo "</h4>";
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
createUserAccount($_POST['create-username'], $_POST['create-password']);

}
?>
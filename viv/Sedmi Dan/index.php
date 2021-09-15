<?php
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Log-In</h2>
<form action="home.php" method="POST">
    <input type="text" name="username" placeholder="Username" required/>
    <input type="password" name="password" placeholder="Password" required/>
    <button type="submit">Login</button>
</form>
</body>
</html>




<?php
    
    error_reporting(E_ALL);
    session_start();
    if (!isset($_SESSION['username'])) {
        echo "TU sam";
        $_SESSION['username'] = 'Milos';
    }
    if (!isset($_SESSION['password'])) {
        echo "TU sam";
        $_SESSION['password'] = 'pozz123';
    }

    $username = $_SESSION['name'];
    $password = $_SESSION['password'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Welcome to the APP</h2>
<p>Username <?php echo $username;?></p>
<p>Password <?php echo $password;?></p>
</body>
</html>
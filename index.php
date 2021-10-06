<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        if(isset($_SESSION['id'])){
            echo $_SESSION['name'];
            echo '<br>';
            echo '<a href="includes/logout.inc.php">Logout</a>';
        }else{
            echo 'Faça login ou registre-se:';
            echo '<br>';
            echo '<a href="login.php">Login</a>';
            echo '<br>';
            echo '<a href="register.php">Sign Up</a>';
        }
    ?>
</body>
</html>
<form action="includes/register.inc.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email">
    <br>
    <label for="name">Nome:</label>
    <input type="text" name="name">
    <br>
    <label for="password">Senha:</label>
    <input type="password" name="password">
    <br>
    <label for="password2">Repita sua senha:</label>
    <input type="password" name="password2">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>
<br>

<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'missinginput'){
            echo '<p>You need to fill all the inputs!</p>';
        }
        elseif($_GET['error'] == 'differentpasswords'){
            echo '<p>Passwords are different</p>';
        }
        elseif($_GET['error'] == 'invalidemail'){
            echo '<p>Invalid email</p>';
        }
        elseif($_GET['error'] == 'emailtaken'){
            echo '<p>This email is already being used</p>';
        }
        elseif($_GET['error'] == 'failedtocreateaccount'){
            echo '<p>Failed to create account, try again</p>';
        }
        elseif($_GET['error'] == 'stmtfailed'){
            echo '<p>Internal error, please try again</p>';
        }
        
    }
?>

<a href="login.php">Login</a>
<br>
<a href="index.php">Home</a>
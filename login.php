<form action="includes/login.inc.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email">
    <br>
    <label for="password">Senha:</label>
    <input type="password" name="password">
    <br>
    <button type="submit" name="submit">Login</button>
</form>

<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'missinginput'){
            echo '<p>You need to fill all the inputs!</p>';
        }
        elseif($_GET['error'] == 'invalidemail'){
            echo '<p>Invalid email</p>';
        }
        elseif($_GET['error'] == 'wrongemail'){
            echo "<p>Email doesnt exist</p>";
        }
        elseif($_GET['error'] == 'stmtfailed'){
            echo '<p>Internal error, please try again</p>';
        }
        elseif($_GET['error'] == 'loginerror'){
            echo '<p>Internal error, please try again</p>';
        }
        elseif($_GET['error'] == 'wrongpwd'){
            echo '<p>Wrong password</p>';
        }
    }
?>

<a href="register.php">Sign Up</a>
<br>
<a href="index.php">Home</a>
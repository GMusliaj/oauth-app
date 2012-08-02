<?php
session_start();
if (isset($_SESSION['username']))
{
    header('profile.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Image Hub</title>
    </head>
    <body>
        <header>
            
        </header>
        <p> You are not logged in!</p>
        <div id="login">
            <form action="login.php" method="post" >
                <label>Username</label>
                <br/>
                <input type="text" name="username" />
                <br/>
                <label>Password</label>
                <br/>
                <input type="password" name="password" />
                <br/>
                <input type="submit" />
            </form>
        </div>
    </body>
</html>

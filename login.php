<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 18/04/2018
 * Time: 21:53
 */
include('reg_user.php');
?>

<html>
<head>
    <title>Wizard Duel - Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="login.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>Not a member? Register<a href="register.php">here.</a> </p>
    </form>
</body>
</html>

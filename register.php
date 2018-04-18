<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 18/04/2018
 * Time: 21:53
 */
include ("reg_user.php");
?>

<html>
<head>
    <title>Wizard Duels - Register</title>
    <link href="/CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="Register">
        <h2>Register Account</h2>
    </div>
    <form method="post" action="register.php">
        <?php include("errors.php");?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password?>"
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Submit</button>
        </div>
        <p>Members sign in <a href="login.php">here.</a> </p>
    </form>
</body>
</html>

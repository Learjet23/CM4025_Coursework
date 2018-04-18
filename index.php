<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 17/04/2018
 * Time: 16:50
 */

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<html>
<head>
    <title>Wizard Duels</title>
    <link href="/CSS/login.css" rel="stylesheet" type="text/css">
    <link href="/CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>

    <!--Game box-->
    <div id="header">Wizard Duel</div>
    <div id="container">
        <div id="navigation"><div id="nav_div"></div>2<br /> <br /></div>
        <div id="content"><div id="con_div">3</div><br /> <br /> <br /></div>
    </div>
    <div id="footer"><center>&copy; Wizard Duel 2018: A Scott Learmonth Game</center></div>
</body>
</html>

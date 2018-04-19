<?php
include ('player.php');
?>
<html>
<head>
    <title>Wizard Duels</title>
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
    <div id="navigation"><div id="nav_div"><?php echo $spells_sql[''] ?></div></div>
    <div id="content"><div id="con_div">
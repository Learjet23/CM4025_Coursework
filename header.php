<?php include ("dbconnect.php"); ?>
<html>
<head>
    <title>Wizard Duels</title>
    <link href="/CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="content">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>

<!--Game box-->
<div id="header">Wizard Duel</div>
<div id="container">
    <div id="navigation">
        <div id="nav_div">
            <?php
            include("safe.php");
            if(isset($_SESSION['username'])) {
                ?>
                &raquo; <a href="spells.php">Your spells</a><br/><br/>
                &raquo; <a href="rank.php">Rankings</a><br/><br/>
                &raquo; <a href="index.php">Your stats</a><br/><br/>
                &raquo; <a href="index.php?logout='1'" style="color: red;">logout</a>
                <?php
            }else{
                echo "You must be logged in to see this";
            }
            ?>
        </div>
    </div>
    <div id="content"><div id="con_div">
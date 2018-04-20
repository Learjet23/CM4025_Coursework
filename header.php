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
            &raquo; <a href="spells.php">Your spells</a><br/><br/>
            &raquo; <a href="ranks.php">Rankings</a><br/><br/>
            &raquo; <a href="stats.php">Your stats</a><br/><br/>
            &raquo; <a href="index.php?logout='1'" style="color: red;">logout</a>
        </div>
    </div>
    <div id="content"><div id="con_div">
<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 00:52
 */


$users_sql = "SELECT * FROM users WHERE username='".$_SESSION['username']."'";
$users_get = mysqli_query($db, $users_sql);
$users = mysqli_fetch_assoc($users_get);

$spells_sql = "SELECT * FROM spells";
$spells_get = mysqli_query($db, $spells_sql);
$spells = mysqli_fetch_assoc($spells_get);

$userid_sql = "SELECT iduser FROM users WHERE username='".$_SESSION['username']."'";
$userid_get = mysqli_query($db, $userid_sql);
$userid = mysqli_fetch_assoc($userid_get);

$usr_expel_sql = "SELECT * FROM usr_spells WHERE userid='$userid' AND name='Expelliarmous'";
$usr_expel_get = mysqli_query($db, $usr_expel_sql);
$usr_expel = mysqli_fetch_assoc($usr_expel_get);
<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 00:52
 */


$users_sql = "SELECT * FROM users WHERE username='".$_SESSION['username']."'";
$users_get = mysqli_query($db, $users_sql);

$spells = "SELECT * FROM spells";
$spells_get = mysqli_query($db, $spells);

$usrid_get = "SELECT userid FROM users WHERE username='".$_SESSION['username']."'";
$userid = mysqli_query($db, $usrid_get);

$usr_spells = "SELECT * FROM usr_spells WHERE userid='$userid'";
$usr_spells_get = mysqli_query($db, $usr_spells);
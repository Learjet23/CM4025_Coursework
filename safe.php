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

$usr_spell_sql = "SELECT * FROM usr_spells WHERE iduser='".$users['iduser']."'";
$usr_spell_get = mysqli_query($db, $usr_spell_sql);
$usr_spell = mysqli_fetch_assoc($usr_spell_get);

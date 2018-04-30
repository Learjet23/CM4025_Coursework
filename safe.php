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

$avada_sql = "SELECT * FROM spells WHERE name='Avada Kedavra'";
$avada_get = mysqli_query($db, $avada_sql);
$avada = mysqli_fetch_assoc($avada_get);

$crucio_sql = "SELECT * FROM spells WHERE name='Crucio'";
$crucio_get = mysqli_query($db, $crucio_sql);
$crucio = mysqli_fetch_assoc($crucio_get);

$flip_sql = "SELECT * FROM spells WHERE name='Flipendo'";
$flip_get = mysqli_query($db, $flip_sql);
$flip = mysqli_fetch_assoc($flip_get);

$expel_sql = "SELECT * FROM spells WHERE name='Expelliarmous'";
$expel_get = mysqli_query($db, $expel_sql);
$expel = mysqli_fetch_assoc($expel_get);

$usr_avada_sql = "SELECT * FROM usr_spells WHERE iduser='".$users['iduser']."' AND name='Avada Kedavra'";
$usr_avada_get = mysqli_query($db, $usr_avada_sql);
$usr_avada = mysqli_fetch_assoc($usr_avada_get);

$usr_crucio_sql = "SELECT * FROM usr_spells WHERE iduser='".$users['iduser']."' AND name='Crucio'";
$usr_crucio_get = mysqli_query($db, $usr_crucio_sql);
$usr_crucio = mysqli_fetch_assoc($usr_crucio_get);

$usr_flip_sql = "SELECT * FROM usr_spells WHERE iduser='".$users['iduser']."' AND name='Flipendo'";
$usr_flip_get = mysqli_query($db, $usr_flip_sql);
$usr_flip = mysqli_fetch_assoc($usr_flip_get);

$usr_expel_sql = "SELECT * FROM usr_spells WHERE iduser='".$users['iduser']."' AND name='Expelliarmous'";
$usr_expel_get = mysqli_query($db, $usr_expel_sql);
$usr_expel = mysqli_fetch_assoc($usr_expel_get);
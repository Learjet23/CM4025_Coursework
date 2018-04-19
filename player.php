<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 00:52
 */

include ('dbconnect.php');
include ('spells.php');

$username = $_SESSION['username'];

$iduser_sql = "SELECT iduser FROM users WHERE username=$username";

$spells_sql = "SELECT * FROM usr_spells WHERE iduser=$iduser_sql";

$usr_spells_get = mysqli_query($db, $spells_sql);


//Refresh PP of spells if a day has past since last login
if($current_time > $_SESSION['login_date']){
    $avada_pp = $avada['maxpp'];
    $crucio_pp = $crucio['maxpp'];
    $expel_pp = $expel['maxpp'];
    $flipendo_pp = $flipendo['maxpp'];

    $refresh_avada_pp = "INSERT INTO usr_spells (PP) VALUE ('$avada_pp') WHERE iduser=$iduser_sql AND name='Avada Kedavra'";
    $refresh_crucio_pp = "INSERT INTO usr_spells (PP) VALUE ('$crucio_pp') WHERE iduser=$iduser_sql AND name='Crucio'";
    $refresh_expel_pp = "INSERT INTO usr_spells (PP) VALUE ('$expel_pp') WHERE iduser=$iduser_sql AND name='Expelliarmous'";
    $refresh_flipendo_pp = "INSERT INTO usr_spells (PP) VALUE ('$flipendo_pp') WHERE iduser=$iduser_sql AND name='Flipendo'";

    mysqli_query($db, $refresh_flipendo_pp);
    mysqli_query($db, $refresh_expel_pp);
    mysqli_query($db, $refresh_crucio_pp);
    mysqli_query($db, $refresh_avada_pp);
}
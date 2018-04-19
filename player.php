<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 00:52
 */

include ('dbconnect.php');

$username = $_SESSION['username'];

$iduser_sql = "SELECT iduser FROM users WHERE username=$username";

$spells_sql = "SELECT * FROM usr_spells WHERE iduser=$iduser_sql";

$spells_get = mysqli_query($db, $spells_sql);
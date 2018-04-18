<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 18/04/2018
 * Time: 12:35
 */

include ("dbconnect.php");

$query = "INSERT INTO 'user' ('username', 'password') VALUES ('scott', 'password')";

$result = mysqli_query($db, $query);
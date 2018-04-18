<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 18/04/2018
 * Time: 12:35
 */

include ("dbconnect.php");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";
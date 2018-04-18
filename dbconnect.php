<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 17/04/2018
 * Time: 18:12
 */
$host = 'cm4025-wizard.mysql.database.azure.com';
$user = 'admindb';
$pwd = 'Admin_123';
$data = 'wizard';

$db = mysqli_connect($host, $user, $pwd, $data);

if ($db->connect_error) {
    echo "broken yo";
    die("Connection failed: " . $db->connect_error);
}
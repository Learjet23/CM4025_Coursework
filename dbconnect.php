<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 17/04/2018
 * Time: 18:12
 */
$host = 'cm4025-wizard.mysql.database.azure.com';
$user = 'admindb@cm4025-wizard';
$pwd = 'Admin_123';
$data = 'wizard';

$db = mysqli_connect($host, $user, $pwd, $data);

if (!$db) {
    echo "\ndb failed to connect";
    die("Connection failed: " . mysqli_connect_error());
}else{echo "\ndb connected";}
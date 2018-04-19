<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 17/04/2018
 * Time: 18:12
 */
$host = 'cm4025-wizard.mysql.database.azure.com';
$usr = 'admindb@cm4025-wizard';
$pwd = 'Admin_123';
$data = 'wizard';

date_default_timezone_set('Europe/London');
$current_date = date('d/m/y');

$db = mysqli_connect($host, $usr, $pwd, $data);

if (!$db) {
    echo "\ndb failed to connect";
    die("Connection failed: " . mysqli_connect_error());
}else{echo "\ndb connected";}
<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 17/04/2018
 * Time: 18:12
 */
define('DB_SERVER', 'cm4025-wizard.mysql.database.azure.com');
define('DB_USERNAME', 'admindb');
define('DB_PASSWORD', 'Admin_123');
define('DB_DATABASE', 'mysql');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

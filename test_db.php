<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 18/04/2018
 * Time: 12:35
 */

include ("dbconnect.php");

echo "sup yo";

$sql = "INSERT INTO 'user' ('username', 'password') VALUES ('scott', 'pwd')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
echo "test";
$db->close();
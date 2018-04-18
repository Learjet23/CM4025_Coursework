<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 18/04/2018
 * Time: 12:35
 */

include ("dbconnect.php");

echo "\nbefore query";

$sql = "INSERT INTO user (username, password) VALUES ('scott', 'pwd')";

echo "\nbefore executing query";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
echo "\n after query";
$db->close();
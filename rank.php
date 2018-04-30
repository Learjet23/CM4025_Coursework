<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 30/04/2018
 * Time: 00:57
 */

session_start();
include ('header.php');

$get_rank_sql = "SELECT username AND XP FROM users ORDER BY XP";
$get_rank_db = mysqli_query($db, $get_rank_sql);
while ($get_rank = mysqli_fetch_assoc($get_rank_db)){
    echo "<tr>";
    echo "<td>" . $get_rank['username'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $get_rank['XP'] . "</td>";
    echo "</tr>";
}

include ('footer.php');
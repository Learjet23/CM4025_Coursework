<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 30/04/2018
 * Time: 00:57
 */

session_start();
include ('header.php');
?>
<h2>World Rankings</h2>
<table cellpadding="2" cellspacing="2">
    <tr>
        <td width="50px">Rank</td>
        <td width="150px">Username</td>
        <td width="200px">XP</td>
    </tr>
    <?php
    $count = 1;
    $get_rank_sql = "SELECT username AND XP FROM users ORDER BY XP";
    $get_rank_db = mysqli_query($db, $get_rank_sql);
    while ($get_rank = mysqli_fetch_assoc($get_rank_db)){
    echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>" . $get_rank['username'] . "</td>";
        echo "<td>" . $get_rank['XP'] . "</td>";
    echo "</tr>";
    $count++;
    }
    ?>
</table>



include ('footer.php');
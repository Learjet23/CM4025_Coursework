<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 21:58
 */
session_start();
include ("header.php");

$username = $_SESSION['username'];
$userid = "SELECT userid FROM users WHERE username='$username'";
$stats = "SELECT * FROM usr_spells WHERE userid='$userid'";

if(!isset($username)){
    echo "You must be logged in to view this page";
}else{
    ?>
    <h2>Your Stats</h2>
    <br/>
    <table>
        <tr>
            <td>Username: </td>
            <td><i>
                <?php
                echo $username . " " . $userid;
                ?>
            </i></td>
        </tr>
    </table>
<?php
}

include ("footer.php");
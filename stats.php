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

$users_sql = "SELECT * FROM users WHERE username='".$_SESSION['username']."'";
$users_get = mysqli_query($db, $users_sql);

$spells = "SELECT * FROM spells";
$spells_get = mysqli_query($db, $spells);

$userid = $users_get['userid'];
$usr_spells = "SELECT * FROM usr_spells WHERE userid='$userid'";
$usr_spells_get = mysqli_query($db, $usr_spells);

if(!isset($_SESSION['username'])){
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
                echo $username . " " . $usr_spells_get;
                ?>
            </i></td>
        </tr>
    </table>
<?php
}

include ("footer.php");
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
                echo $username;
                ?>
            </i></td>
        </tr>
        <tr>
            <td>HP: </td>
            <td><i>
                <?php
                echo $users['HP'] ;
                ?>
            </i></td>
        </tr>
    </table>
<?php
}

include ("footer.php");
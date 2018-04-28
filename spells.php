<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 12:28
 */

session_start();
include ("header.php");

if(!isset($_SESSION['username'])){
    echo "You must be logged in to view this page";
}else{
    ?>
    <!-- Users spells and PP -->
    <h2>Your Spells</h2>
    <br/>
    <table>
        <tr>
            <td>Expelliarmous: </td>
            <td><i><?php echo $userid; echo $usr_expel['PP']; ?></i></td>
        </tr>
        <tr>
            <td>Flipendo: </td>
            <td><i><?php ?></i></td>
        </tr>
        <tr>
            <td>Crucio: </td>
            <td><i><?php ?></i></td>
        </tr>
        <tr>
            <td>Avada Kedavra: </td>
            <td><i><?php ?></i></td>
        </tr>
    </table>
    <?php
}

include ("footer.php");
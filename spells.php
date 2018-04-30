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
            <td><i><?php echo $usr_spell['expel']; ?></i></td>
        </tr>
        <tr>
            <td>Flipendo: </td>
            <td><i><?php echo $usr_spell['flipendo'];?></i></td>
        </tr>
        <tr>
            <td>Crucio: </td>
            <td><i><?php echo $usr_spell['crucio'];?></i></td>
        </tr>
        <tr>
            <td>Avada Kedavra: </td>
            <td><i><?php echo $usr_spell['avada'];?></i></td>
        </tr>
    </table>
    <h2>Replenish spells (cost 150XP to max PP)</h2>
    <form    action="shop.php" method="post">
        <input type="submit" name="avada" value="Avada Kedavra">
        <input type="submit" name="crucio" value="Crucio">
        <input type="submit" name="flipendo" value="Flipendo">
        <input type="submit" name="expel" value="Expelliarmous">
    </form>
    <?php
}

include ("footer.php");
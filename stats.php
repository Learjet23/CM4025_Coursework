<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 21:58
 */
session_start();
include ("header.php");
if(!isset($_SESSION['username'])){
    echo "You must be logged in to view this page";
}else{
    if(!isset($_GET['id'])){
        echo "YOU SHOULD NOT BE HERE";
    }else{
        $id = $_GET['id'];
        $usr_check_sql = "SELECT * FROM users WHERE iduser='". $id ."'";
        $usr_check = mysqli_query($db, $usr_check_sql);
        if(mysqli_num_rows($usr_check) == 0){
            echo "NO USER WITH THIS ID";
        }else{
            $usr_check_get = mysqli_fetch_assoc($usr_check);
            ?>
            <h2>Player Stats</h2>
            <br/>
            <?php
            echo $usr_check_get['username'];
            ?>
            <br/><br/>
            <h>Rank: <?php echo $usr_check_get['rank']; ?></h>
            <br/>
            <h>XP: <?php echo $usr_check_get['XP']; ?></h>
            <br/>
            <br/>
            <?php
                $duel_check_sql = "SELECT id FROM logs WHERE attackid='".$users['iduser']."' AND defendid='".$id."'";
                $duel_check = mysqli_query($db, $duel_check_sql);
            ?>
            <i>Attacks on <?php $usr_check_get['username']; ?> in last two minutes: (<?php echo mysqli_num_rows($duel_check) ?>/2)</i>
            <form action="duel.php" method="post">
                <input type="submit" name="avada" value="Avada Kedavra">
                <input type="submit" name="crucio" value="Crucio">
                <input type="submit" name="flipendo" value="Flipendo">
                <input type="submit" name="expel" value="Expelliarmous">
                <input type="hidden" name="id" value="<?php echo $id; ?>"
            </form>
            <?php
        }
    }
}

include ("footer.php");
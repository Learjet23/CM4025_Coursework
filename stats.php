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
            <h>HP: <?php echo $usr_check_get['HP'];?></h>
            <br/>
            <h>XP: <?php echo $usr_check_get['XP']; ?></h>
            <br/>
            <br/>
            <?php
                $duel_check_sql = "SELECT id FROM logs WHERE attackid='".$users['iduser']."' AND defendid='".$id."' AND time > '".(time() - 120)."'";
                $duel_check = mysqli_query($db, $duel_check_sql);
                $duel_num = mysqli_num_rows($duel_check);
            ?>
            <i>Attacks on <?php $usr_check_get['username']; ?> in last two minutes: (<?php echo $duel_num ?>/2)</i>
            <?php
            if($users['HP'] == 0){
                echo "You need more health to be able to attack someone!";
            }else {
                if ($duel_num < 2) {
                    ?>
                    <form action="duel.php" method="post">
                        <input type="submit" name="avada" value="Avada Kedavra">
                        <input type="submit" name="crucio" value="Crucio">
                        <input type="submit" name="flipendo" value="Flipendo">
                        <input type="submit" name="expel" value="Expelliarmous">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    </form>
                    <?php
                } else {
                    echo "You have attacked this user too many times";
                }
            }
        }
    }
}

include ("footer.php");
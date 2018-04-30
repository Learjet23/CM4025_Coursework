<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 30/04/2018
 * Time: 18:24
 */
session_start();
include ('header.php');

if(!isset($_SESSION['username'])){
    echo "You must be logged in to view this page";
}else{
    if(isset($_POST['hp'])){
        $cost = 100 - $users['HP'];
        if($users['XP' < $cost]){
            echo "Insufficient funds";
        }else{
            $add_health = "UPDATE users SET HP=HP + $cost WHERE iduser='".$users['iduser']."'";
            $cost_xp = "UPDATE users SET XP=XP - $cost WHERE iduser='".$users['iduser']."'";
            mysqli_query($db, $add_health);
            mysqli_query($db, $cost_xp);
            header('location: index.php');
        }
    }elseif($_POST['avada']){
        $cost = 150;
        if($users['XP'] < $cost){
            echo "Insufficient funds";
        }else{
            if($usr_spell['avada'] == $avada['maxpp']){
                echo "This spell has the max PP";
            }else{
                $add_pp = "UPDATE usr_spells SET avada= 1 WHERE iduser='".$users['iduser']."'";
                $cost_xp = "UPDATE users SET XP=XP - $cost WHERE iduser='".$users['iduser']."'";
                mysqli_query($db, $add_pp);
                mysqli_query($db, $cost_xp);
                header('location: spells.php');
            }
        }
    }elseif($_POST['crucio']){
        $cost = 150;
        if($users['XP'] < $cost){
            echo "Insufficient funds";
        }else{
            if($usr_spell['crucio'] == $avada['maxpp']){
                echo "This spell has the max PP";
            }else{
                $add_pp = "UPDATE usr_spells SET crucio= 10 WHERE iduser='".$users['iduser']."'";
                $cost_xp = "UPDATE users SET XP=XP - $cost WHERE iduser='".$users['iduser']."'";
                mysqli_query($db, $add_pp);
                mysqli_query($db, $cost_xp);
                header('location: spells.php');
            }
        }
    }elseif($_POST['flip']){
        $cost = 150;
        if($users['XP'] < $cost){
            echo "Insufficient funds";
        }else{
            if($usr_spell['flip'] == $avada['maxpp']){
                echo "This spell has the max PP";
            }else{
                $add_pp = "UPDATE usr_spells SET flip= 70 WHERE iduser='".$users['iduser']."'";
                $cost_xp = "UPDATE users SET XP=XP - $cost WHERE iduser='".$users['iduser']."'";
                mysqli_query($db, $add_pp);
                mysqli_query($db, $cost_xp);
                header('location: spells.php');
            }
        }
    }elseif($_POST['expel']){
        $cost = 150;
        if($users['XP'] < $cost){
            echo "Insufficient funds";
        }else{
            if($usr_spell['expel'] == $avada['maxpp']){
                echo "This spell has the max PP";
            }else{
                $add_pp = "UPDATE usr_spells SET expel= 100 WHERE iduser='".$users['iduser']."'";
                $cost_xp = "UPDATE users SET XP=XP - $cost WHERE iduser='".$users['iduser']."'";
                mysqli_query($db, $add_pp);
                mysqli_query($db, $cost_xp);
                header('location: spells.php');
            }
        }
    }

}

include ('footer.php');
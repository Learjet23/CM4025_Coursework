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
    if($users['XP' < 100]){
        echo "Insufficient funds";
    }else{
        $cost = 100 - $users['HP'];
        $add_health = "UPDATE users SET HP=HP + $cost WHERE iduser='".$users['iduser']."'";
        $cost_xp = "UPDATE users SET XP=XP - $cost WHERE iduser='".$users['iduser']."'";
        mysqli_query($db, $add_health);
        mysqli_query($db, $cost_xp);
        header('location: index.php');
    }
}

include ('footer.php');
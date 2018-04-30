<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 17/04/2018
 * Time: 16:50
 */

session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

include ('header.php');

if(!isset($_GET['id'])){
    output("Error. You should not be here");
}else{
    $id = protect($_GET['id']);
    $usr_check_sql = "SELECT * FROM users WHERE iduser='".$id."'";
    $usr_check = mysqli_query($db, $usr_check_sql);
    if(mysqli_num_rows($usr_check) == 0){
        output("No user with this id");
    }else{

    }
}

include ("footer.php");
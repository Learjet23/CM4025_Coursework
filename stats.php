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
        }
    }
}

include ("footer.php");
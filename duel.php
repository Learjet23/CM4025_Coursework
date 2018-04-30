<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 30/04/2018
 * Time: 11:22
 */
session_start();
include ("header.php");
if(!isset($_SESSION['username'])){
    echo "You must be logged in to view this page";
}else{
    if(isset($_POST['avada'])){
        $id = $_POST['id'];

        $usr_check_sql = "SELECT * FROM users WHERE iduser='".$id."'";
        $usr_check = mysqli_query($db, $usr_check_sql);
        if(mysqli_num_rows($usr_check) == 0){
            echo "user does not exist";
        }else{
            $enemy_stats = mysqli_fetch_assoc($usr_check);
            if($enemy_stats['HP'] == 0) {
                echo "User has no health and cannot be attacked";
            }else{
                $chance = rand(1,100);
                if($chance > $avada['chance']){
                    echo "attack missed!";
                    $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."', '$id', '0', '".$enemy_stats['HP']."','".time()."')";
                    mysqli_query($db, $log_sql);
                    header('location: stats.php?id=' . $id);
                }else{
                    if($usr_spell['avada'] >= 1){
                        $damage = $avada['damage'];
                        $attack_sql = "UPDATE users SET HP=HP-'".$damage."' WHERE iduser='".$id."'";
                        $attack_used = "UPDATE usr_spells SET PP=PP-1 WHERE name='Avada Kedavra'";
                        mysqli_query($db, $attack_sql);
                        mysqli_query($db, $attack_used);
                        $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."', '$id', '$damage', '".$enemy_stats['HP']."','".time()."')";
                        mysqli_query($db, $log_sql);
                        //echo "Attack hit! " . $enemy_stats['username'] . " has " . $enemy_stats['HP'] . " HP left.";
                        if($enemy_stats['HP'] == 0){
                            echo "Enemy defeated";
                            $xp_update = "UPDATE users SET XP=XP + 100 WHERE iduser='".$users['iduser']."'";
                            header('location: stats.php?id=' . $id);
                        }else{
                            header('location: stats.php?id=' . $id);
                        }
                    }else{
                        echo "You are out of PP";
                    }

                }
            }
        }
    }elseif (isset($_POST['crucio'])){
        $id = $_POST['id'];

        $usr_check_sql = "SELECT * FROM users WHERE iduser='".$id."'";
        $usr_check = mysqli_query($db, $usr_check_sql);
        if(mysqli_num_rows($usr_check) == 0){
            echo "user does not exist";
        }else{
            $enemy_stats = mysqli_fetch_assoc($usr_check);
            if($enemy_stats['HP'] == 0) {
                echo "User has no health and cannot be attacked";
            }else{
                $chance = rand(1,100);
                if($chance > $crucio['chance']){
                    echo "attack missed!";
                    $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."', '$id', '0', '".$enemy_stats['HP']."','".time()."')";
                    mysqli_query($db, $log_sql);
                }else{
                    if($usr_spell['crucio'] >= 1){
                        $damage = $crucio['damage'];
                        $attack_sql = "UPDATE users SET HP=HP-'".$damage."' WHERE iduser='".$id."'";
                        $attack_used = "UPDATE usr_spells SET PP=PP-1 WHERE name='Crucio'";
                        mysqli_query($db, $attack_sql);
                        mysqli_query($db, $attack_used);
                        $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."', '$id', '$damage', '".$enemy_stats['HP']."','".time()."')";
                        mysqli_query($db, $log_sql);
                        //echo "Attack hit! " . $enemy_stats['username'] . " has " . $enemy_stats['HP'] . " HP left.";
                        if($enemy_stats['HP'] == 0){
                            echo "Enemy defeated";
                            $xp_update = "UPDATE users SET XP=XP + 100 WHERE iduser='".$users['iduser']."'";
                            header('location: stats.php?id=' . $id);
                        }else{
                            header('location: stats.php?id=' . $id);
                        }
                    }else{
                        echo "You are out of PP";
                    }

                }
            }
        }
    }elseif (isset($_POST['flipendo'])){
        $id = $_POST['id'];

        $usr_check_sql = "SELECT * FROM users WHERE iduser='".$id."'";
        $usr_check = mysqli_query($db, $usr_check_sql);
        if(mysqli_num_rows($usr_check) == 0){
            echo "user does not exist";
        }else{
            $enemy_stats = mysqli_fetch_assoc($usr_check);
            if($enemy_stats['HP'] == 0) {
                echo "User has no health and cannot be attacked";
            }else{
                $chance = rand(1,100);
                if($chance > $flip['chance']){
                    echo "attack missed!";
                    $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."', '$id', '0', '".$enemy_stats['HP']."','".time()."')";
                    mysqli_query($db, $log_sql);
                }else{
                    if($usr_spell['flip'] >= 1){
                        $damage = $flip['damage'];
                        $attack_sql = "UPDATE users SET HP=HP-'".$damage."' WHERE iduser='".$id."'";
                        $attack_used = "UPDATE usr_spells SET PP=PP-1 WHERE name='Flipendo'";
                        mysqli_query($db, $attack_sql);
                        mysqli_query($db, $attack_used);
                        $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."', '$id', '$damage', '".$enemy_stats['HP']."','".time()."')";
                        mysqli_query($db, $log_sql);
                        //echo "Attack hit! " . $enemy_stats['username'] . " has " . $enemy_stats['HP'] . " HP left.";
                        if($enemy_stats['HP'] == 0){
                            echo "Enemy defeated";
                            $xp_update = "UPDATE users SET XP=XP + 100 WHERE iduser='".$users['iduser']."'";
                            header('location: stats.php?id=' . $id);
                        }else{
                            header('location: stats.php?id=' . $id);
                        }
                    }else{
                        echo "You are out of PP";
                    }

                }
            }
        }
    }elseif (isset($_POST['expel'])){
        $id = $_POST['id'];

        $usr_check_sql = "SELECT * FROM users WHERE iduser='".$id."'";
        $usr_check = mysqli_query($db, $usr_check_sql);
        if(mysqli_num_rows($usr_check) == 0){
            echo "user does not exist";
        }else{
            $enemy_stats = mysqli_fetch_assoc($usr_check);
            if($enemy_stats['HP'] == 0) {
                echo "User has no health and cannot be attacked";
            }else{
                $chance = rand(1,100);
                if($chance > $expel['chance']){
                    echo "attack missed!";
                    $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."','$id', '0', '".$enemy_stats['HP']."','".time()."')";
                    mysqli_query($db, $log_sql);
                }else{
                    if($usr_spell['expel'] >= 1){
                        $damage = $expel['damage'];
                        $attack_sql = "UPDATE users SET HP=HP-'".$damage."' WHERE iduser='".$id."'";
                        $attack_used = "UPDATE usr_spells SET PP=PP-1 WHERE name='Expelliarmous'";
                        mysqli_query($db, $attack_sql);
                        mysqli_query($db, $attack_used);
                        $log_sql = "INSERT INTO logs (attackid, defendid, att_dam, def_hp, time) VALUES ('".$users['iduser']."','$id', '$damage', '".$enemy_stats['HP']."','".time()."')";
                        mysqli_query($db, $log_sql);
                        //echo "Attack hit! " . $enemy_stats['username'] . " has " . $enemy_stats['HP'] . " HP left.";
                        if($enemy_stats['HP'] == 0){
                            echo "Enemy defeated";
                            $xp_update = "UPDATE users SET XP=XP + 100 WHERE iduser='".$users['iduser']."'";
                            header('location: stats.php?id=' . $id);
                        }else{
                            header('location: stats.php?id=' . $id);
                        }
                    }else{
                        echo "You are out of PP";
                    }

                }
            }
        }
    }else{
        echo "you should not be here";
    }
}

include ('footer.php');
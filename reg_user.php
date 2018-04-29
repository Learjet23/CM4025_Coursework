<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 18/04/2018
 * Time: 12:35
 */

include ("dbconnect.php");

session_start();

$username = "";
$password = "";
$errors = array();

//Register user
if(isset($_POST['reg_user'])){
    //get values
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //Form validation
    if(empty($username)){array_push($errors, "Username is required");}
    if(empty($password)){array_push($errors, "Password is required");}

    //DB Validation
    $user_check_query = "SELECT * FROM users WHERE username = $username LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['username'] === $username) {
            array_push($errors, "Username already exists!");
        }
    }

    //Register user
    if(count($errors) == 0){
        $password = md5($password);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['login_date'] = $current_date;
        $_SESSION['success'] = "You are logged in";
        include ("safe.php");
        $stat_sql = "INSERT INTO usr_spells (iduser) VALUE ('".$users['iduser']."')";
        mysqli_query($db, $stat_sql);
        header('location: index.php');
    }
}

//Login user
if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($username)){array_push($errors, "Username required");}
    if(empty($password)){array_push($errors, "Password required");}

    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['login_date'] = $current_date;
            $_SESSION['success'] = "You are now logged in!";
            header('location: index.php');
        }else{
            array_push($errors, "Wrong username and password combination");
        }
    }
}
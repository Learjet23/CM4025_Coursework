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
        $sql = "INSERT INTO user (username, password) VALUES ('scott', 'pwd')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are logged in";
        header('location: index.php');
    }
}

mysqli_close($db);
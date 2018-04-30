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
$username = $_SESSION['username'];
?>
<h2>Your Stats</h2>
    <br/>
<table>
    <tr>
        <td>Username: </td>
        <td><i><?php echo $username;?></i></td>
    </tr>
    <tr>
        <td>HP: </td>
        <td><i><?php echo $users['HP'];?></i></td>
    </tr>
    <tr>
        <td>XP: </td>
        <td><i><?php echo $users['XP'];?></i></td>
    </tr>
    <tr>
        <td>Replenish health (cost 1XP per HP): </td>
        <td><input type="button" name="buy" value="Buy"></td>
        <script>
            document.getElementById('buy').onClick = function(){
                <?php
                if($users['HP'] == 100){
                    echo "<br/>You already have max HP";
                }else{
                    $cost = 100 - $users['HP'];
                    $get_health = "UPDATE users SET HP = HP + $cost WHERE iduser='".$users['iduser']."'";
                    $update_xp = "UPDATE users SET XP = XP - $cost WHERE iduser='".$users['iduser']."'";
                    mysqli_query($db, $get_health);
                    mysqli_query($db, $update_xp);
                    echo "<br/>Health replenished";
                }
                ?>
            };
        </script>
    </tr>

</table>
<?php
include ("footer.php");
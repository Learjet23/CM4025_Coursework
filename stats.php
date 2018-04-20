<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 19/04/2018
 * Time: 21:58
 */
session_start();
include ("header.php");
include ("player.php");

if(!isset($_SESSION['username'])){
    echo "You must be logged in to view this page";
}else{
    ?>
    <h2>Your Stats</h2>
    <br/>
    <table>
        <tr>
            <td>Username: </td>
            <td><i>
                <?php
                if (mysqli_num_rows($usr_spells_get) > 0) {
                    while($row = mysqli_fetch_assoc($usr_spells_get)) {
                        echo $row["username"]. "<br>";
                    }
                }
                ?>
            </i></td>
        </tr>
    </table>
<?php
}

include ("footer.php");
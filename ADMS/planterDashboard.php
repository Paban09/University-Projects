<?php 
session_start();
?>

    <fieldset style="width:40%;text-align: center;margin-left: 420;">
    <legend>PLANTER</legend>
    <?php 
        if(isset($_SESSION['username'])){
            echo "<h1> Welcome ".$_SESSION['username']."!</h1>";
        }
       ?>
    <p>Welcome to Planter Dashboard!</p>
    <a href="viewPlanter.php">Planter Profile</a>
    <br>
    <a href="Logout.php">Logout</a>
    </fieldset>


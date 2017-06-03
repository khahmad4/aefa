<?php

session_start();

$_SESSION['loggedIn']=true;


?>




<!DOCTYPE html>
<html>
<head>
    <title>Logged In</title>
    <?php
    include 'links.php';
    ?>
</head>

<style>
    body {
        background: url("fishfeedpics/feeding-fish.jpg");

        background-repeat: no-repeat;

        background-size:100%;
    }
</style>




<script>
    function logout() {
        <?php
        session_unset();
        session_destroy();
        ?>
        alert("You are succesfully loggedout");
    }
</script>





<body>


<!--upper navbar open-->
<?php
include 'loginUppernavbar.php';?>
?>
<!--navbar close-->









<div id="boxcollectionAccountant"  >


    <a href="http://localhost:63342/FYP/profile.php" class="myButton"><img src="box%20images/765-default-avatar.png" width="140"height="140"><br>PROFILE</a>


    <a style="margin-left: 25px"href="http://localhost:63342/FYP/stock.php" class="myButton"><img src="box%20images/stock.png"width="140" height="140"><br> Stock </a>


    <br><br><br><br><br><br>





    <a   href="http://localhost:63342/FYP/Accounts.php" class="myButton"><img src="box%20images/acoonts.jpg"width="140" height="140"><br> Accounts </a>

    <a style="margin-left: 27px" href="http://localhost:63342/FYP/reports.php" class="myButton"><img src="box%20images/report.png"width="140" height="140"><br> Reports  </a>








</div>




<!--bottom navbar open-->
<?php
include 'BottomNavBar.php'
?>
<!--navbar close-->









</body>
</html>
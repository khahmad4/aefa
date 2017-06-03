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









<div id="boxcollectionResouceManager"  >


    <a href="http://localhost:63342/FYP/profile.php" class="myButton"><img src="box%20images/765-default-avatar.png" width="140"height="140"><br>PROFILE</a>

    <a style="margin-left: 25px"href="http://localhost:63342/FYP/rawMaterial.php" class="myButton" ><img src="box%20images/raw-materials-350.jpg"width="140" height="140"> <br>Raw materials</a>

    <a style="margin-left: 25px"href="http://localhost:63342/FYP/stock.php" class="myButton"><img src="box%20images/stock.png"width="140" height="140"><br> Stock </a>


    <br><br><br><br><br><br>



    <a   href="http://localhost:63342/FYP/manufacture.php" class="myButton"><img src="box%20images/manufature.jpg"width="140" height="140"><br> Manufacturing  </a>

    <a  style="margin-left: 25px" href="http://localhost:63342/FYP/addEmployee.php" class="myButton"><img src="box%20images/addcustomer.ico "width="140" height="140"><br> Add Employee </a>

    <a style="margin-left: 25px"href="http://localhost:63342/FYP/AllEmployee.php" class="myButton"><img src="box%20images/employee.JPG  "width="140" height="140"><br>Employee's </a>







</div>




<!--bottom navbar open-->
<?php
include 'BottomNavBar.php'
?>
<!--navbar close-->









</body>
</html>
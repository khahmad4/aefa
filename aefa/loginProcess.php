


<!DOCTYPE html>
<html>
<head>
    <title>login process</title>
    <?php
    include 'links.php';
    ?>
</head>

<body>

<?php



error_reporting(0);
include ("connection.php");

$username = $_POST['username'];
$password = $_POST['pass'];

$query = "select * from login where username = '$username' and password = '$password'";

$result = mysqli_query($connection,$query);

while ($row_data = mysqli_fetch_array($result)){

    $db_username = $row_data['username'];
    $db_password = $row_data['password'];

}

if (($username === $db_username) && ($password === $db_password)){

    echo "<br>

You are logged in as $username";

header("location:http://localhost:63342/FYP/TMloggedIn.php");

}
else {

?>

<head>

</head>

<style>
    body {
        background: url("fishfeedpics/feeding-fish.jpg");

        background-repeat: no-repeat;

        background-size:100%;
    }
</style>

<form action="home.php"
<div class="alert alert-danger">
    <strong>Danger!</strong> Invalid Username Or Password . Try Again ..





    <input type="submit" name="tryagain" value="trygain">
    </form>




</div>



<?php

}?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot password</title>
    <?php
    include 'links.php';

    ?>

</head>
<style>
    body {
        background:lavender;

        background-repeat: no-repeat;

        background-size:100%;
    }
</style>
<body>

<form class="form-signin" method="post" action="" >
    <h2 class="form-signin-heading">Forgot Password</h2>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">@</span>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
    <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
    <a class="btn btn-lg btn-primary btn-block" href="home.php">Login</a>
</form>

<?php
require_once('connection.php');
error_reporting(0);
if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $user = "SELECT * FROM `login` WHERE username = '$username'";
    $res = mysqli_query($connection, $user);
    $count = mysqli_num_rows($res);
    if($count == 1){



        $sql = "SELECT password FROM login WHERE username = '$username'";
        $result = $connection->query($sql);

// output data of each row
        $row = $result->fetch_assoc();
        echo "<br>password is : " . $row["password"] . "<br>";

        $sql = "SELECT email FROM login WHERE username = '$username'";
        $email = $connection->query($sql);

// output data of each row
        $row = $email->fetch_assoc();
        echo "<br>email is : " . $row["email"] . "<br>";


        $r = mysqli_fetch_assoc($res);
        $password = $r['password'];
        $to = $r['email'];
        $subject = "Your Recovered Password";

        $message = "Please use this password to login " . $password;
        $headers = "From :ahmad.hassan11@hotmail.com";
        if(mail($to, $subject, $message, $headers)){
            echo "Your Password has been sent to your email id";
        }else{
            echo "Failed to Recover your password, try again";
        }





    }else{

        ?>
        <h5 class="col-md-offset-8" style="color: red;margin-top: -170px">Invalid Username</h5>

        <?php

    }
}

?>

</body>
</html>
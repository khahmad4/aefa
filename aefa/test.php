<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get"  >
    <p style="color: #000000"> User ID: <input required  style="color: #000000" type="text" name="username">
        Password: <input required style="color: #000000" type="password" name="pass">
    <p>
        <br></p>
    <input  class="btn btn-success" style="margin-left: 350px;margin-top: -15px" name="submit" type="submit" value="login" >

    </p>

    <?php
                if(isset($_REQUEST['submit'])){
                    $pass=$_REQUEST['pass'];
                    echo "pass is". md5("hi".$pass."by");
                }
                ?>
</form>
</body>
</html>
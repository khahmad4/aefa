<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <?php
    include 'links.php';
    ?>


</head>






<body>


<!--upper navbar open-->
<?php
include 'upperNavBar.php';


?>
<!--navbar close-->

<div class="col-md-12">
    <div class="col-md-6">



                <img src="fishfeedpics/sn-buzzfoodheader_0.jpg"width="500" height="500">






    </div>


    <div class="col-md-6">
        <div >
            <!--for login-->
            <div id="login_div"  >

                <h3 style="color: green">Login</h3>
                <form method="post" action="loginProcess.php">
                    <p style="color: #000000"> User ID: <input required  style="color: #000000" type="text" name="username">
                        Password: <input required style="color: #000000" type="password" name="pass">
                    <p>
                        <br></p>
                    <input  class="btn btn-success" style="margin-left: 350px;margin-top: -15px" type="submit" value="login" >
                    </p>
                </form>




            </div>


            <form  id="forgot" method="post " action="forgotpass.php">

                <input  type="submit"class="btn btn-danger" name="forget" value="Forget passworrd">


            </form>

            <!--for login close-->
            <br>
        </div>
    </div>

</div>







<h4 style="margin-left: 250px"> Fish Food</h4>





<!--bottom navbar open-->
<?php
include 'BottomNavBar.php';
?>
<!--navbar close-->










</body>
</html>

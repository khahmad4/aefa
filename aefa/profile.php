<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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
<script>
    function logout() {
        <?php
        session_unset();
        session_destroy();
        ?>
        alert("You are succesfully loggedout");
    }
</script>


<!--edit profile functions-->


<script>
    function editFname() {
        var txt;
        var person = prompt("Please enter your First name:", "");
        if (person == null || person == "") {
            txt = "Can't be empty.";
        } else {
                 <!--query to update in db-->
        }

    }
</script>



<script>
    function editLname() {
        var txt;
        var person = prompt("Please enter your Last name:", "");
        if (person == null || person == "") {
            txt = "Can't be empty.";
        } else {
            <!--query to update in db-->
        }

    }
</script>

<script>
    function editCelNo() {
        var txt;
        var person = prompt("Please enter your Cel No:", "+923*********");
        if (person == null || person == "") {
            txt = "Can't be empty.";
        } else {
            <!--query to update in db-->
        }

    }
</script>



<script>
    function editAddress() {
        var txt;
        var person = prompt("Please enter your Address:", "House Number,block,Area");
        if (person == null || person == "") {
            txt = "Can't be empty.";
        } else {
            <!--query to update in db-->
        }

    }
</script>







<!--edit profile ends-->


<body>


<!--upper navbar open-->
<?php
include 'loginUppernavbar.php';?>
<!--navbar close-->
<br>






<div class="col-md-12">

    <div class="col-md-6">

       <p id="profilePageInfo" >
            <BR>
           FIRST NAME :     query             <br>    <button class="glyphicon glyphicon-pencil" id="editbtn"  onclick="editFname()">Edit </button>
           <br><br>
           LAST NAME :       query            <br>     <button class="glyphicon glyphicon-pencil" id="editbtn" onclick="editLname()">Edit</button>
           <br><br>
           ADDRESS :         query             <br>    <button class="glyphicon glyphicon-pencil" id="editbtn" onclick="editAddress()">Edit</button>
           <br><br>
           CEL NO  :          query             <br>    <button class="glyphicon glyphicon-pencil" id="editbtn" onclick="editCelNo()">Edit</button>
           <br><br>
           CNIC NO :         query to display cnic ,cant change
           <br><br>

       </p>


    </div>


    <div class="col-md-6">

        <?php

        error_reporting(0);
        include ("connection.php");



        $user = $_POST['username'];

        echo "$user";

        $query="SELECT Pic FROM login ";
        $result=mysqli_query($connection,$query);


        while($row=mysqli_fetch_array($result))
        {


            $path= $row['Pic'];

            echo '<img src="'.$path.'" class=col-md-offset-7 style="width:150px;height:200px">';


            "<br>"; "<br>";


        }

        ?>

        <br>
    </div>




</div>




 <p class="col-md-offset-9" style="font-size: small;">
     NOTE:<br>
     THE INFORMATION IS HIGHLY CONFIDENTIAL . <BR>
     CNIC CAN'T BE CHANGED , IF THERE IS MISKATE  <BR>
     IN YOUR CNIC CONTACT YOUR ADMINISTRATOR .
 </p>




<!--bottom navbar open-->
<?php
include 'BottomNavBar.php';
?>
<!--navbar close-->














</body>
</html>
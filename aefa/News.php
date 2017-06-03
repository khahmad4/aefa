<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <?php
    include 'links.php';
    ?>

    <script>
        $(document).ready(function(){
            $("p").hover(function(){
                $(this).css("background-color", "yellow");
            }, function(){
                $(this).css("background-color", "pink");
            });
        });
    </script>





</head>






<body>






<!--upper navbar open-->
<?php
include 'upperNavBar.php';
?>

<!--navbar close-->






    <!--for horizontal bar-->
    <ul >
        <li><a href="http://localhost:63342/FYP/home.php">Home</a></li>
        <li><a class="active" href="http://localhost:63342/FYP/News.php">News</a></li>
        <li><a href="http://localhost:63342/FYP/Contact%20Us.php">Contact Us</a></li>
        <li><a href="http://localhost:63342/FYP/About%20Us.php">About Us</a></li>
        <li><a href="http://localhost:63342/FYP/rate%20Us.php">Rate Us</a> </li>

    </ul>

    <!--for horizontal bar close-->


<p id="news">
<h3 style="color: green;margin-left: 390px;margin-right: 390px">News And Events</h3>

<br>
<p style="margin-left: 390px;margin-right: 390px;"id="paraColor">
    To initiate the automation of the Fishing industry in Pakistan. It is a commercial project, which requires the developer to complete the project in time. It also ensures the satisfaction of the client to the fullest.
</p>
<p style="margin-left: 390px;margin-right: 390px;"id="paraColor">
    It will help the client in increasing profits by automating more and more factories. The client will have the capacity to screen the frameworks and enhance the foundation of the entire organization.</p>
<p style="margin-left: 390px;margin-right: 390px;"id="paraColor">
    This initiation of automation might aware the other industrialist to opt for automated systems to monitor their business. Data mining techniques will help client to make decisions for the future.

</p>
<p style="margin-left: 390px;margin-right: 390px;"id="paraColor">
    A web application will be created to put the company’s name online. It will demonstrate the subtle elements of the items that the organization bargains in.
     </p>

</p>


<!--bottom navbar open-->

<?php
include 'BottomNavBar.php';
?>
<!--navbar close-->






</body>
</html>

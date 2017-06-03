<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
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





<p id="aboutus">
<h3 style="color: green;margin-left: 390px;margin-right: 390px">About US</h3>

<br>
<br>

<div>

    <div>
        <p style="margin-left: 390px;margin-right: 390px;pas"id="paraColor">
            Ayefa Protein Farms (Pvt) Ltd. is a factory that produces different qualities and types of feed for fish. The business process starts from buying different raw material from vendors across the country.
        </p>
        <p style="margin-left: 390px;margin-right: 390px;"id="paraColor">
            The raw materials purchased vary from season to season as their availability is subject to the season. The raw material bought is transported to the factory and kept in warehouses.
        </p>
        <p style="margin-left: 390px;margin-right: 390px;"id="paraColor">
            When the raw material is purchased, it is combined in different proportions to make various types of fish feed. The quality of the feed also differs as the combinations vary.
        </p>
        <p style="margin-left: 390px;margin-right: 390px;"id="paraColor">
            A high quality feed would involve higher priced raw material as compared to a low quality feed. The combination and mixture of feed is done on machines and a lot of raw material is lost during the production which is unnoticed throughout these years.
        </p>
        <br>
        <br>
    </div>


    <div style="margin-left:1100px;margin-top: -250px">
        <!DOCTYPE html>
        <html>
        <body>

        <embed width="320px" height="200px"
               src="https://www.youtube.com/v/o_fdwPaSM3I">
<br>
        </body>
        </html>

    </div>

</div>
</p>


<!--bottom navbar open-->
<?php
include 'BottomNavBar.php';
?>
<!--navbar close-->



</body>
</html>

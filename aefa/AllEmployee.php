<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    <?php
    include 'links.php';
    ?>


</head>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

<style>

    body {
        background:lavender;

        background-repeat: no-repeat;

        background-size:100%;
    }
</style>
<body>



<!--upper navbar open-->
<?php
include 'loginUppernavbar.php';
?>
<!--navbar close-->

<div class="col-md-offset-4">

    <h2 >Employee's Record</h2>



<?php
require_once('connection.php');
error_reporting(0);

$sql = "SELECT id, username, email FROM login";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
echo "<table> <tr>     <th>ID</th><th>UserName</th> <th>Email</th>         </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr>     <td>" . $row["id"]. "</td> <td>" . $row["username"]. "</td>   <td>" . $row["email"]. "</td>          </tr>";
    }
    echo "</table>";
} else {
echo "0 results";
}




$connection->close();
?>
</div>





<!--bottom navbar open-->
<?php
include 'BottomNavBar.php';
?>
<!--navbar close-->










</body>
</html>



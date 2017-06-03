
<?php


$database="Ayefaz";
$username = "root";
$password = "";
$host = "localhost";

$connection = mysqli_connect($host,$username,$password,$database);

if ($connection){
echo "";
}else{
    echo "Try connecting to the database again";
}

<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    <?php
    include 'links.php';
    ?>

</head>
<style>
    .error {color: #FF0000;}
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






<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $cnicErr =$PnoErr= "";
$name = $email = $gender  = $cnic = $Pno="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }


    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["cnic"])) {
        $cnicErr = "CNIC is required";
    } else {
        $cnic = test_input($_POST["cnic"]);
    }

    if (empty($_POST["Pno"])) {
        $PnoErr = "Phone No is required";
    } else {
        $Pno = test_input($_POST["Pno"]);
    }


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="addemp">

<h2 class="">Add Employee</h2>

<p><span class="error">* required fields.</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    CNIC: <input type="text" name="cnic" value="<?php echo $cnic;?>">
    <span class="error">* <?php echo $cnicErr;?></span>
    <br><br>
    Phone: <input type="text" name="Pno" value="<?php echo $Pno;?>">
    <span class="error">* <?php echo $PnoErr;?></span>
    <br><br>


    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male

    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
 echo $gender;
echo "<br>";
echo $cnic;
echo "<br>";
echo $Pno;


?>









<!--bottom navbar open-->
<?php
include 'BottomNavBar.php';
?>
<!--navbar close-->










</body>
</html>
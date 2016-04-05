<html>
<head>
<link rel="stylesheet" type="text/css" href="habitatcss.css" />
<meta name="description" content="Home page for Habitat for Humanity Milledgeville portal" />
<meta name="author" content="Brian Elliott" />
</head>
<body>


<?php
require_once 'habitatheader.php';
require_once 'habitatdb.php';
pageHeader("Volunteers");
session_start();
$connection = connectDB();

$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$first = $_POST['fName'];
$last = $_POST['lName'];
$password = $_POST['pwd'];

$query = "INSERT INTO volunteer(vEmail, vFName, vLName, vPhone, vStreet, vCity, vZip, password)
		 VALUES ('$email', '$first', '$last', '$phone', '$street', '$city', '$zip', '$password')";
$result= $connection->query($query);
if(!$result) die ("Query failed".$connection->error());

echo "<h3>New Volunteer has been added to the database! Their login credentials are their email($email) and their password is $password.<br></h3>";
echo "<h2 id='createVol'><td><a href='volunteer.php'>Return to Volunteer Page</a></h2>";
?>
</body>
</html>
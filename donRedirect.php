<html>
<head>
<link rel="stylesheet" type="text/css" href="habitatcss.css" />
<meta name="description" content="Home page for Habitat for Humanity Milledgeville portal" />
<meta name="author" content="Brian Elliott" />
</head>
<body>

<h2>List of Donors</h2>

<?php
require_once 'habitatheader.php';
require_once 'habitatdb.php';
pageHeader("Donor Information");
session_start();
$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	$first = $_POST['fName'];
	$last = $_POST['lName'];

	$query = "INSERT INTO donor(email, fName, lName, street, city, zip, phone)
		VALUES ('$email', '$first', '$last', '$street', '$city', '$zip', '$phone')";
	$result= $connection->query($query);
	if(!$result) die ("Query failed".$connection->error());

	echo "<h3>New Donor has been added to the database!<br></h3>";
	echo "<h2 id='createVol'><td><a href='donor.php'>Return to Donor Page</a></h2>";
?>
</body>
</html>
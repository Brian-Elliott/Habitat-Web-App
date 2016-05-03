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
pageHeader("Profile Update");
session_start();
if (!isset($_SESSION['user']))
	header("Location: http://localhost:81/phpExamples/Habitat%20Web%20App/loginPortal.php");
$user = $_SESSION['user'];
$connection = connectDB();

$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$first = $_POST['fName'];
$last = $_POST['lName'];
$password = $_POST['pwd'];

$query = "UPDATE `volunteer` SET `vEmail`= '$email',`vFName`='$first',
		`vLName`='$last',`vPhone`= '$phone',`vStreet`= '$street',`vCity`= '$city',`vZip`= '$zip',`password`= '$password' WHERE vEmail = '$user';";
$result= $connection->query($query);
if(!$result) die ("Query failed".$connection->error());

echo "<h3>Profile information has been Updated<br></h3>";
echo "<h2 id='updateProf'><td><a href='profile.php'  class='btn'>Return to Profile Page</a></h2>";
?>
</body>
</html>
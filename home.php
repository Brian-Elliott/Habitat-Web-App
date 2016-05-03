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
pageHeader("Home");
session_start();
$connection=connectDB();
if($connection->connect_error) die("Unable to connect to database".$connection->connect_error);
$user = $_SESSION['user'];
$pwd = $_SESSION['pwd'];


$userQuery="SELECT * FROM volunteer WHERE vEmail = '$user' AND password = '$pwd'";
$userResult=$connection->query($userQuery);
if(!$userResult) die(" Query failed!".$connection->connect_error);

if($userResult)
{
	$userResult->data_seek(0);
	$record= $userResult->fetch_array(MYSQLI_ASSOC);
	$name = $record['vFName'];
	echo "Welcome to the home page, $name! ";
	echo "<p>Use the navigation menu to continue any updates, additions or deletions needed for your work. </p><br><br>";
	echo <<<_END
		<p> The Habitat for Humanity ReStore for Milledgeville/Baldwin County is located at 730 N. Wayne Street, and we oversee 18 Habitat houses 
			in the area.</p>
		<p> This portal is for our volunteers to use to oversee current events and sales at the ReStore.</p>
		<p> Please visit the volunteer page to set the credentials for new volunteer information</p>
_END;
}


?>

</body>
</html>
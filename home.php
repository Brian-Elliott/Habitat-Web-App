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

$connection=connectDB();
if($connection->connect_error) die("Unable to connect to database".$connection->connect_error);

$user=$_POST['username'];
$pwd=$_POST['pwd'];



if(!isset($_SESSION['user']))
{
	$_SESSION['user'] = $user;
}

$userQuery="SELECT * FROM users WHERE username = '$user' AND password = '$pwd'";
$userResult=$connection->query($userQuery);
if(!$userResult) die(" Query failed!".$connection->connect_error);

if($userResult)
{
	echo "Welcome to the home page, $user!";
	echo "Use the navigation menu to continue any updates, additions or deletions needed for your work.";
}


?>
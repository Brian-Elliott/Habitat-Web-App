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
pageHeader("Add a new Volunteer");
session_start();


echo <<<_END
	
	<form action="volRedirect.php" method="post">
		<fieldset>
			<legend>Personal information:</legend>
  			Email Address:<br>
			<input type="text" name="email"><br>
			Password:<br>
			<input type="password" name="pwd"><br>
			First Name:<br>
			<input type:"text" name="fName"><br>
			Last Name:<br>
			<input type:"text" name="lName"><br>
			Phone Number:<br>
			<input type:"text" name="phone"><br>
			Address(Street/City, State/Zip):<br>
    		<input type="text" name="street"><br>
    		<input type="text" name="city"><br>
			<input type="text" name="zip"><br>
			<input type="submit" value="Add Volunteer">
  </fieldset>
</form>

_END;


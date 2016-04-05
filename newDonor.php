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
pageHeader("Add a New Donor");
session_start();


echo <<<_END

	<form action="donRedirect.php" method="post">
		<fieldset>
			<legend>Personal information:</legend>
  			Email Address:<br>
			<input type="text" name="email"><br>
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
			<input type="submit" value="Add Donor">
  </fieldset>
</form>

_END;
?>
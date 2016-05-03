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

	<form action="donRedirect.php" onsubmit= "return allvalid2()" method="post">
		<fieldset>
			<legend>Personal information:</legend>
  			Email Address:<br>
			<input type="text" id="email" name="email"><span class="error" id="errEmail"></span><br>
			First Name:<br>
			<input type="text" id="FN" name="fName"><span class="error" id="errFN"></span><br>
			Last Name:<br>
			<input type="text" id="LN" name="lName"><span class="error" id="errLN"></span><br>
			Phone Number:<br>
			<input type="text" id="phone" name="phone"><span class="error" id="errPhone"></span><br>
			Address(Street/City, State/Zip):<br>
    		<input type="text" name="street"><span class="error" id="errStreet"></span><br>
    		<input type="text" name="city"><span class="error" id="errCity"></span><br>
			<input type="text" name="zip"><span class="error" id="errZip"></span><br>
			<input type="submit" value="Add Donor">
  </fieldset>
</form>

_END;
?>
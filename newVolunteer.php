<html>
<head>
<link rel="stylesheet" type="text/css" href="habitatcss.css" />
<meta name="description" content="Home page for Habitat for Humanity Milledgeville portal" />
<meta name="author" content="Brian Elliott" />
<script
	type="text/javascript"
	src="JSfunctions.js">
</script>
</head>
<body>


<?php
require_once 'habitatheader.php';
require_once 'habitatdb.php';
pageHeader("Add a new Volunteer");
session_start();
if (!isset($_SESSION['user']))
	header("Location: http://localhost:81/phpExamples/Habitat%20Web%20App/loginPortal.php");


echo <<<_END
	
	<form action="volRedirect.php" onsubmit= "return allvalid()" method="post">
		<fieldset>
			<legend>Personal information:</legend>
  			Email Address:<br>
			<input type="text" id="email" name="email"><span class="error" id="errEmail"></span><br>
			Password:<br>
			<input type="password" id="pwd" name="pwd"><span class="error" id="errPass"></span><br>
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
			<input type="submit" value="Add Volunteer">
  </fieldset>
</form>
<script>
	addFunctions()
</script>

_END;

?>
</body>
</html>


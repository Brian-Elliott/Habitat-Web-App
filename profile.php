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
pageHeader("Profile information");
$connection = connectDB();
session_start();
if (!isset($_SESSION['user']))
	header("Location: http://localhost:81/phpExamples/Habitat%20Web%20App/loginPortal.php");
$user = $_SESSION['user'];


$query = "SELECT * FROM volunteer WHERE vEmail = '$user'";

$result=$connection->query($query);

if(!$result) die ("Query failed".$connection->error());

$result->data_seek(0);
$record= $result->fetch_array(MYSQLI_ASSOC);
$email = $record['vEmail'];
$first = $record['vFName'];
$last = $record['vLName'];
$street = $record['vStreet'];
$city = $record['vCity'];
$zip = $record['vZip'];
$phone = $record['vPhone'];
$pwd = $record['password'];

echo <<<_END
	
	<form action="profileUpdate.php" onsubmit= "return allvalid()" method="post">
		<fieldset>
			<legend>Personal information:</legend>
  			Email Address:<br>
			<input type="text" id="email" name="email" value="$email"><span class="error" id="errEmail"></span><br>
			Password:<br>
			<input type="password" id="pwd" name="pwd" value="$pwd"><span class="error" id="errPass"></span><br>
			First Name:<br>
			<input type="text" id="FN" name="fName" value="$first"><span class="error" id="errFN"></span><br>
			Last Name:<br>
			<input type="text" id="LN" name="lName" value="$last"><span class="error" id="errLN"></span><br>
			Phone Number:<br>
			<input type="text" id="phone" name="phone" value="$phone"><span class="error" id="errPhone"></span><br>
			Address(Street/City, State/Zip):<br>
    		<input type="text" name="street" value="$street"><span class="error" id="errStreet"></span><br>
    		<input type="text" name="city" value="$city"><span class="error" id="errCity"></span><br>
			<input type="text" name="zip" value="$zip"><span class="error" id="errZip"></span><br>
			<input type="submit" value="Update Information"  class="btn">
  </fieldset>
</form>
<script>
	addFunctions()
</script>

_END;

?>
</body>
</html>
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
pageHeader("Add a new Update");
session_start();
if (!isset($_SESSION['user']))
	header("Location: http://localhost:81/phpExamples/Habitat%20Web%20App/loginPortal.php");
echo <<<_END
	
	<form action="updateRedirect.php" method="post">
		<fieldset>
			<legend>Information:</legend>
  			Description:<br>
			<input type="text" name="desc"><br>
			Date:<br>
			<input type="text" name="date"><br>
		
			<input type="submit" value="Add Update">
  </fieldset>
</form>

_END;

?>
</body>
</html>
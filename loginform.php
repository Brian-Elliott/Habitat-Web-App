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
echo <<<_END
	<form action="login.php" method="post">
	<fieldset>
	<legend>Personal information:</legend>
	Username:<br>
	<input type="text" name="username"><br>
	Password:<br>
	<input type="password" name="pwd"><br>
	<input type="submit" value="Login">
	</fieldset>
	</form>
	
_END;

?>
<?php
function connectDB()
{
	$server="localhost";
	$db="habitat web application";
	$user="brian";
	$pwd="brianpwd";
	$connection= new mysqli($server, $user, $pwd, $db);
	return $connection;
}

function closeConnection($result, $connection)
{
	$result->close();
	$connection->close();
}

?>
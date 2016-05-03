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
pageHeader("Volunteers");
$connection = connectDB();

if($connection->connect_error) die("unable to connect to database".$connection->connect_error);
session_start();
if (!isset($_SESSION['user']))
	header("Location: http://localhost:81/phpExamples/Habitat%20Web%20App/loginPortal.php");
$query="SELECT * FROM storeupdates";
$result=$connection->query($query);

if(!$result) die ("Query failed".$connection->error());
$rows=$result->num_rows;

echo "<table>";
echo <<<_END
	<th> Date </th>
	<th> Description </th>
	
_END;
for($i=0; $i<$rows; $i++)
{

	echo "<tr>";

	$result->data_seek($i);
	$record=$result->fetch_array(MYSQLI_ASSOC);
	$update=$record["description"];
	$date=$record["updateDate"];
	
	echo <<<_END
	
	<form action="soldGoodAdd.php" method="post">
	<td><b><input type="text" name="desc" value="$date" readonly><br></b></td>
	<td><b><input type="text" name="date" value="$update" readonly><br></b></td>
	
_END;
	
	
	echo "</tr>";
	
	}
	echo"</table>";
	echo "<a href='newUpdate.php' class='btn'>Add New Update</a>";



?>

</body>
</html>
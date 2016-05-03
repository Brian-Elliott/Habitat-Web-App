<html>
<head>
<link rel="stylesheet" type="text/css" href="habitatcss.css" />
<meta name="description" content="Home page for Habitat for Humanity Milledgeville portal" />
<meta name="author" content="Brian Elliott" />
</head>
<body>
<?php
require_once"habitatdb.php";
require_once"habitatheader.php";
pageHeader("Current Inventory");
session_start();
if (!isset($_SESSION['user']))
	header("Location: http://localhost:81/phpExamples/Habitat%20Web%20App/loginPortal.php");
$connection= connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

$query="SELECT saleDate, description, donorEmail, price, quantity FROM soldgoods";
$result=$connection->query($query);

if(!$result) die ("Query failed".$connection->error());
$rows=$result->num_rows;

echo "<table>";
echo <<<_END
	<th> Item Name </th>
	<th> Date Sold </th>
	<th> Price </th>
	<th> Quantity </th>
	<th> Donor Email </th>
_END;
for($i=0; $i<$rows; $i++)
{

		echo "<tr>";
	
	$result->data_seek($i);
	$record=$result->fetch_array(MYSQLI_ASSOC);
	$iN=$record["description"];
	$price=$record["price"];
	$dEm=$record["donorEmail"];
	$qu=$record["quantity"];
	$date = $record["saleDate"];

echo <<<_END
	
	<form action="soldGoodAdd.php" method="post">
	<td><b><input type="text" name="desc" value="$iN" readonly><br></b></td>
	<td><b><input type="text" name="date" value="$date" readonly><br></b></td>
	<td> <input type="text" name="price" value="$price" readonly><br></td>
	<td> <input type="text" name="quan" value="$qu" readonly></td>
	<td> <input type="text" name="dEmail" value="$dEm" readonly></td>
	</form>

_END;
	

		echo "</tr>";
	
}
echo"</table>";
closeConnection($result, $connection);
?>
</body>
</html>
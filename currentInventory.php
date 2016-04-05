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
pageHeader("Inventory");
$cols = 4;
$connection= connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

$query="SELECT itemID, description, donorEmail, price, quantity FROM inventory";
$result=$connection->query($query);

if(!$result) die ("Query failed".$connection->error());
$rows=$result->num_rows;

echo "<table>";
for($i=0; $i<$rows; $i++)
{
	if($i%$cols==0){
		echo "<tr>";
	}
	$result->data_seek($i);
	$record=$result->fetch_array(MYSQLI_ASSOC);
	$iN=$record["description"];
	$price=$record["price"];
	$dEm=$record["donorEmail"];
	$qu=$record["quantity"];
	echo "<td>";
echo <<<_END
	
	<form action="cart.php" method="post">
	<h4>$iN</h4>
	<input type="submit" value="Add new item to inventory">
	<h4> Price: $price
		</h4>
		<input type="hidden" name="itemName" value="$iN">
		<input type="hidden" name="price" value="$price">
	</form>

_END;
	
	echo "</td>";
	if($i%$cols==3){
		echo "</tr>";
	}
}
echo"</table>";
closeConnection($result, $connection);
?>
</body>
</html>
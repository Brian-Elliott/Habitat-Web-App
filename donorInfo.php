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
pageHeader("Donor Information");
session_start();
$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

$query2 = "SELECT * FROM donor";

$result2=$connection->query($query2);

if(!$result2) die ("Query failed".$connection->error());
$rows2=$result2->num_rows;

echo "<table>";
echo <<<_END
	<tr>
	<th>Email Address</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Street</th>
	<th>City</th>
	<th>Zip Code</th>
	<th>Phone Number</th>
	</tr>
_END;
for($i = 0; $i <$rows2; $i++){
	echo "<tr>";
	$result2->data_seek($i);
	$record= $result2->fetch_array(MYSQLI_ASSOC);
	$email = $record['email'];
	$first = $record['fName'];
	$last = $record['lName'];
	$street = $record['street'];
	$city = $record['city'];
	$zip = $record['zip'];
	$phone = $record['phone'];
		echo <<<_END
		<td>$email</td>
		<td>$first</td>
		<td>$last</td>
		<td>$street</td>
		<td>$city</td>
		<td>$zip</td>
		<td>$phone</td>	
	</tr>	
_END;
}
echo "</table>";
echo "<h2 id='createDonor'><td><a href='newdonor.php'>Add New Donor Information</a></h2>";
session_destroy();
?>
</body>

</html>

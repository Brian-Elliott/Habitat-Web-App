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

echo <<<_END
	
	<h2>Store Hours, Come help out whenever you are available</h2>
	<ul>
		<li>Thursday: 10:00 to 4:00</li>
		<li>Friday: 10:00 to 4:00</li>
		<li>To help on other days, contact the ReStore Manager at 478-555-4031</li>
	</ul>
	<h2>Volunteer Events</h2>
	<table id="volevents"> 
		<tr>
			<th>Date</th>
			<th>Sponsor</th>
			<th>Description</th>
			<th>Start Time</th>
			<th>End Time</th>
		</tr>
		<tr>
			<td>June 27th</td>
			<td>Cogentes Technologies</td>
			<td>Red Clay Ramble Bike Race</td>
			<td>9:00 AM</td>
			<td>3:00 PM</td>
		</tr>
		<tr>
			<td>July 2nd</td>
			<td>Habitat International</td>
			<td>Habitat Summit</td>
			<td>10:00 AM</td>
			<td>5:00 PM</td>
		</tr>
		<tr>
			<td>July 28th</td>
			<td>Habitat Home Work Day</td>
			<td>Habitat for Humanity Milledgeville/Baldwin County</td>
			<td>12:00 PM</td>
			<td>6:00 PM</td>
		</tr>
	</table>
	<br>
		<h2 id='createVol'><td><a href='newVolunteer.php'>Add New Volunteer Information</a></h2>";
_END;
	$query2 = "SELECT vEmail, vFName, vLName, vPhone, vStreet, vCity, vZip FROM volunteer";

$result2=$connection->query($query2);

if(!$result2) die ("Query failed".$connection->error());
$rows2=$result2->num_rows;

echo "<table id='volTable'>";
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
	$email = $record['vEmail'];
	$first = $record['vFName'];
	$last = $record['vLName'];
	$street = $record['vStreet'];
	$city = $record['vCity'];
	$zip = $record['vZip'];
	$phone = $record['vPhone'];
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

?>
</body>
</html>
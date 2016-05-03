<?php
require_once"habitatdb.php";

$connection= connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

$desc=$_POST['desc'];
$date=$_POST['date'];



$query="INSERT INTO `storeUpdates`(`description`, `updateDate`) VALUES ('$desc', '$date')";
$result=$connection->query($query);

if(!$result) die ("Query failed".$connection->error());


header('Location: http://localhost:81/phpExamples/Habitat%20Web%20App/storeupdates.php');
?>
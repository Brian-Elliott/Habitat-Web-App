<?php
require_once"habitatdb.php";

$connection= connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

$desc=$_POST['desc'];
$price=$_POST['price'];
$quan=$_POST['quan'];
$dEmail=$_POST['dEmail'];


$query="INSERT INTO `inventory`(`description`, `donorEmail`, `price`, `quantity`) VALUES ('$desc','$dEmail', $price, $quan)";
$result=$connection->query($query);

if(!$result) die ("Query failed".$connection->error());


header('Location: http://localhost:81/phpExamples/Habitat%20Web%20App/currentInventory.php');
?>
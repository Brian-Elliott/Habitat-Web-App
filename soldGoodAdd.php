<?php
require_once"habitatdb.php";

$connection= connectDB();
if($connection->connect_error) die("unable to connect to database".$connection->connect_error);

$id=$_POST['id'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$quan=$_POST['quan'];
$dEmail=$_POST['dEmail'];


$query="INSERT INTO `soldgoods`(`description`, `donorEmail`, `price`, `quantity`) VALUES ('$desc','$dEmail', $price, $quan)";
$result=$connection->query($query);

if(!$result) die ("Insert Query failed".$connection->error());

$query2="DELETE FROM inventory WHERE itemID = $id";
$result2=$connection->query($query2);

if(!$result2) die ("Delete Query failed".$connection->error());

header('Location: http://localhost:81/phpExamples/Habitat%20Web%20App/soldGoods.php');

?>
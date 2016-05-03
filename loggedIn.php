
<?php
session_start();

$user=$_POST['username'];
$pwd=$_POST['pwd'];


$_SESSION['user'] = $user;
$_SESSION['pwd'] = $pwd;


header('Location: http://localhost:81/phpExamples/Habitat%20Web%20App/home.php');


?>


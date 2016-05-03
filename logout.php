<?php
session_start();
unset($_SESSION['user']);
session_destroy();

header('Location: http://localhost:81/phpExamples/Habitat%20Web%20App/loginform.php');
?>
<?php

$userName = $_POST['name'];
$userEmail = $_POST["email"];
$password = $_POST['password'];

echo "Welcome $userName your email is $userEmail your pw is $password!<br>";
echo "Welcome $userName your email is $userEmail your pw is " . $password . "!";


?>
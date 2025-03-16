<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "signupforms";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die(mysqli_error($con));
}

?>

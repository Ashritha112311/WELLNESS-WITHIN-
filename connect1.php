<?php
// connect1.php
$host = 'localhost';
$db = 'wellness';
$user = 'root';
$password = '';

$con = new mysqli($host, $user, $password, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

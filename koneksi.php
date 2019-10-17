<?php

session_start();

if(!isset($_SESSION['username'])){
	header('Location: index.php');
}

$servername = "localhost";
$username = "id9887429_atapotomatis";
$password = "Atapotomatis12345678";
$dbname = "id9887429_atapotomatis";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo ""
?>

<?php
$servername = "localhost";
$username = "u991668360_SweetPets";
$password = "SweetPets2021";
$bd = 'u991668360_SweetPets';
$port = '3306';

// Create connection
$conn = new mysqli($servername, $username, $password, $bd, $port);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_management";

// creation du connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification du connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
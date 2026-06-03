<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Η σύνδεση απέτυχε: " . $conn->connect_error);
}
?>
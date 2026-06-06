<?php

// Στοιχεία σύνδεσης με βάση δεδομένων
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse_store";

$conn = new mysqli($servername, $username, $password, $dbname);  // Δημιουργία σύνδεσης  

if ($conn->connect_error) {  // Έλεγχος επιτυχούς σύνδεσης 
    die("Η σύνδεση απέτυχε: " . $conn->connect_error);
}
?>

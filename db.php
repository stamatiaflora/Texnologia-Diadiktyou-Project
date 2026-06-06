<?php

// Στοιχεία σύνδεσης με βάση δεδομένων
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse_store";

// Δημιουργία σύνδεσης 
$conn = new mysqli($servername, $username, $password, $dbname);

// Έλεγχος επιτυχούς σύνδεσης 
if ($conn->connect_error) {
    die("Η σύνδεση απέτυχε: " . $conn->connect_error);
}
?>

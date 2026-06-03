<?php
include 'db.php';

$sql = "SELECT * FROM products";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Προβολή Προϊόντων</title>
</head>
<body>

<h1>Προϊόντα Αποθήκης</h1>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Όνομα</th>
        <th>Κατηγορία</th>
        <th>Μέγεθος</th>
        <th>Χρώμα</th>
        <th>Ποσότητα</th>
        <th>Τιμή</th>
    </tr>

<?php

if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "<tr>
        
        <td>".$row["id"]."</td>
        <td>".$row["product_name"]."</td>
        <td>".$row["category"]."</td>
        <td>".$row["size"]."</td>
        <td>".$row["color"]."</td>
        <td>".$row["quantity"]."</td>
        <td>".$row["price"]." €</td>
        
        </tr>";
    }

} else {

    echo "Δεν υπάρχουν προϊόντα.";

}

?>

</table>

<br>

<a href='index.php'>Επιστροφή στην Αρχική</a>

</body>
</html>
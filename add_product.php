<?php
include 'db.php';

if(isset($_POST['submit'])) {

    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products 
    (product_name, category, size, color, quantity, price)
    
    VALUES 
    ('$product_name', '$category', '$size', '$color', '$quantity', '$price')";

    if($conn->query($sql) === TRUE) {
        echo "Το προϊόν προστέθηκε επιτυχώς!";
    } else {
        echo "Σφάλμα: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Προσθήκη Προϊόντος</title>
</head>
<body>

<h1>Προσθήκη Προϊόντος</h1>

<form method="POST">

    <label>Όνομα Προϊόντος:</label>
    <input type="text" name="product_name" required>
    
    <br><br>

    <label>Κατηγορία:</label>
    <select name="category">

        <option>Κολάν</option>
        <option>Αθλητικό Τοπ</option>
        <option>Ζακέτα</option>
        <option>Ολόσωμη Φόρμα</option>

    </select>

    <br><br>

    <label>Μέγεθος:</label>
    <select name="size">

        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>

    </select>

    <br><br>

    <label>Χρώμα:</label>
    <select name="color">

        <option>Ροζ</option>
        <option>Μαύρο</option>
        <option>Λευκό</option>
        <option>Κόκκινο</option>

    </select>

    <br><br>

    <label>Ποσότητα:</label>
    <input type="number" name="quantity" required>

    <br><br>

    <label>Τιμή:</label>
    <input type="number" step="0.01" name="price" required>

    <br><br>

    <button type="submit" name="submit">
        Προσθήκη Προϊόντος
    </button>

</form>

<br>

<a href="index.php">Επιστροφή στην Αρχική</a>

</body>
</html>
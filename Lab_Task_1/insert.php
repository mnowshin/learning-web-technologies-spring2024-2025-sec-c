<?php
$conn = new mysqli("localhost", "root", "", "product_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    $sql = "INSERT INTO products (name, buying_price, selling_price) VALUES ('$name', '$buying_price', '$selling_price')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully. <a href='index1.php'>Add another</a> | <a href='display.php'>View Products</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
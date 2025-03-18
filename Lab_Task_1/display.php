<?php
$conn = new mysqli("localhost", "root", "", "product_db");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

echo "<table border='1'>
        <tr><th>ID</th><th>Name</th><th>Buying Price</th><th>Selling Price</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['buying_price']}</td>
            <td>{$row['selling_price']}</td>
          </tr>";
}
echo "</table>";
?>
<a href="index1.php">Add More Products</a>
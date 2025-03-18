<form action="insert.php" method="post">
    <label>Name</label>
    <input type="text" name="name" required>

    <label>Buying Price</label>
    <input type="number" name="buying_price" step="0.01" required>

    <label>Selling Price</label>
    <input type="number" name="selling_price" step="0.01" required>

    <button type="submit">SAVE</button>
</form>
<a href="display.php">View Products</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>
<body>
    <h1>Add a New Item</h1>
    <form action="index.php?action=addItem" method="POST">
        <input type="text" name="name" placeholder="Item Name" required>
        <input type="number" name="price" placeholder="Item Price" required>
        <button type="submit">Add Item</button>
    </form>
    <br>
    <a href="index.php">Back to Item List</a>
</body>
</html>

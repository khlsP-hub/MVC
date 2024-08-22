<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
</head>
<body>
    <h1>Item List</h1>
    <ul>
        <?php foreach ($items as $item): ?>
            <li><?php echo $item['name']; ?> - $<?php echo $item['price']; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?action=showForm">Add New Item</a>
</body>
</html>

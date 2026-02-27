<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
    <style>
        body { font-family: Arial; background:#f4f6f8; }
        .container { width:600px; margin:auto; }
        .card {
            background:white;
            padding:15px;
            margin:10px 0;
            border-radius:10px;
            box-shadow:0 3px 8px rgba(0,0,0,0.1);
        }
        .low-stock { border-left:5px solid red; }
        .in-stock { border-left:5px solid green; }
        input { width:100%; padding:8px; margin:5px 0; }
    </style>
</head>
<body>

<div class="container">

<h2>Product Management</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Product Name">
    <input type="number" name="price" placeholder="Price">
    <input type="text" name="category" placeholder="Category">
    <input type="number" name="stock" placeholder="Stock Quantity">
    <button type="submit">Add Product</button>
</form>

<hr>

<h3>Product List</h3>

<?php if (!empty($products)): ?>

    <?php foreach ($products as $product): ?>

        <!--
        HINT:
        If stock <= 5 → apply low-stock class
        Else → in-stock class
        -->

        <div class="card <?php echo($product["stock"] <= 5) ? 'low-stock' : 'in-stock'?> ">

            <!-- HINT: Echo product values safely -->
            <strong><?php echo $product['name']; ?></strong><br>
            Price: <?php echo $product['price']; ?><br>
            Category: <?php echo $product['category']; ?><br>
            Stock: <?php echo $product['stock']; ?><br>
            Created: <?php echo $product['createdAt']; ?>

        </div>

    <?php endforeach; ?>

<?php else: ?>

    <p>No products available.</p>

<?php endif; ?>

</div>

</body>
</html>
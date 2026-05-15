<?php
    require_once("Post.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $p = new Post(); 
        $p->setProductName($_POST['product_name']);
        $p->setDescription($_POST['description']); 
        $p->setPrice($_POST['price']);
        $p->setStockQuantity($_POST['stock_quantity']);
        $p->setCategory($_POST['category']);

        $p->addPost(); 
        echo "<script>alert('Data Inserted Successfully'); document.location='Read.php'</script>";
    }
?>
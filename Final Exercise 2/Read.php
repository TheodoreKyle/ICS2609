<?php
    require_once("Post.php"); 
    $post = new Post();
    $posts = $post->getPosts(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-wrap">
        <div class="page-header"></div>
            <div class="badge"><span class="badge-dot"></span> Inventory Management</div>
                <h1>Phone and Tablet Inventory</h1>
                <p>Browse and manage all listed products.</p><br>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock Quantity</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post) { ?>
                    <tr>
                        <td class="td-id"><?php echo $post->id ?></td>
                        <td><?php echo $post->product_name ?></td>
                        <td><?php echo $post->description ?></td>
                        <td class="td-price"><?php echo $post->price ?></td>
                        <td><?php echo $post->stock_quantity ?></td>
                        <td><?php echo $post->category ?></td>
                        <td><a href="<?php echo 'Edit.php?id='.$post->id ?>" class="btn-edit">Edit</a>
                            <a href="<?php echo "Delete.php?id=".$post->id ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
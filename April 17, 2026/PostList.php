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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Post List</h1>

    <table class = "table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
        <?php foreach($posts as $post) { ?>
            <tr>
                <td><?php echo $post->id ?></td>
                <td><?php echo $post->title ?></td>
                <td><?php echo $post->body ?></td>
                <td><?php echo $post->author ?></td>
                <td><a href="" class="btn btn-primary">Edit</a><a href="<?php echo "DeletePost.php?id=".$post->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php } ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
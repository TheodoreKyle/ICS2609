<?php

require_once("Post.php");

$post = new Post();

$id = $_GET['id'];

$data = $post->getPost($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header">
            <h2>Edit Post</h2>
        </div>

        <div class="card-body">

            <form method="POST" action="UpdatePost.php">

                <input
                    type="hidden"
                    name="id"
                    value="<?php echo $data->id; ?>"
                >

                <div class="mb-3">

                    <label>Title</label>

                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        value="<?php echo htmlspecialchars($data->title); ?>"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Body</label>

                    <textarea
                        name="body"
                        class="form-control"
                        rows="5"
                    ><?php echo htmlspecialchars($data->body); ?></textarea>

                </div>

                <div class="mb-3">

                    <label>Author</label>

                    <input
                        type="text"
                        name="author"
                        class="form-control"
                        value="<?php echo htmlspecialchars($data->author); ?>"
                    >

                </div>

                <div class="mb-3">

                    <label>Image</label>

                    <input
                        type="text"
                        name="image"
                        class="form-control"
                        value="<?php echo htmlspecialchars($data->image); ?>"
                    >

                </div>

                <button type="submit" name="edit" class="btn btn-primary">
                    Update Post
                </button>

                <a href="PostList.php" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>
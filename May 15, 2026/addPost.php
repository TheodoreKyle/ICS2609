<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header">
            <h2>Add Post</h2>
        </div>

        <div class="card-body">

            <form action="SavePost.php" method="POST">

                <div class="mb-3">
                    <label>Title</label>

                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label>Body</label>

                    <textarea
                        name="body"
                        class="form-control"
                        rows="5"
                    ></textarea>
                </div>

                <div class="mb-3">
                    <label>Author</label>

                    <input
                        type="text"
                        name="author"
                        class="form-control"
                    >
                </div>

                <button type="submit" name="save" class="btn btn-primary">
                    Save Post
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
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
    <title>Post List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h1>Post List</h1>

        <a href="addPost.php" class="btn btn-success">
            Add Post
        </a>

    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Author</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

        </thead>

        <tbody>

        <?php foreach($posts as $row) { ?>

            <tr>

                <td><?php echo $row->id; ?></td>

                <td><?php echo htmlspecialchars($row->title); ?></td>

                <td><?php echo htmlspecialchars($row->body); ?></td>

                <td><?php echo htmlspecialchars($row->author); ?></td>

                <td><img src="<?php echo htmlspecialchars($row->image); ?>" style="width: 350px; height: auto;"></td>

                <td>

                    <a
                        href="EditPost.php?id=<?php echo $row->id; ?>"
                        class="btn btn-primary btn-sm"
                    >
                        Edit
                    </a>

                    <button
                        class="btn btn-danger btn-sm"
                        onclick="deletePost(<?php echo $row->id; ?>)"
                    >
                        Delete
                    </button>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

<script>

function deletePost(id){

    Swal.fire({
        title: "Are you sure?",
        text: "This action cannot be undone!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {

        if(result.isConfirmed){

            window.location.href = "deletePost.php?id=" + id;

        }

    });

}

</script>

<?php if(isset($_GET['added'])) { ?>

<script>

Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: 'Post added successfully'
});

</script>

<?php } ?>

<?php if(isset($_GET['updated'])) { ?>

<script>

Swal.fire({
    icon: 'success',
    title: 'Updated!',
    text: 'Post updated successfully'
});

</script>

<?php } ?>

<?php if(isset($_GET['deleted'])) { ?>

<script>

Swal.fire({
    icon: 'success',
    title: 'Deleted!',
    text: 'Post deleted successfully'
});

</script>

<?php } ?>

</body>
</html>
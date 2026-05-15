<?php

require_once("Post.php");

if(isset($_POST['edit'])) {

    $p = new Post();

    $p->setId($_POST['id']);
    $p->setTitle($_POST['title']);
    $p->setBody($_POST['body']);
    $p->setAuthor($_POST['author']);

    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $fileName = time() . '_' . basename($_FILES['image']['name']);
        $img_loc = 'uploads/posts/';
        $targetFile = $img_loc . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileType, $allowed)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $imagePath = $targetFile;
            }
        }
    }

    $p->updatePost($imagePath);

    header("Location: PostList.php?updated=1");
    exit;
}
?>
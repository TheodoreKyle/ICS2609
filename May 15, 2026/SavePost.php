<?php

require_once("Post.php");

if(isset($_POST['save'])) {

    $post = new Post();

    $post->setTitle($_POST['title']);
    $post->setBody($_POST['body']);
    $post->setAuthor($_POST['author']);

    $imagePath = null; 
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $fileName = time() . '_' . basename($_FILES['image']['name']);
        $img_loc = 'uploads/posts/';

        $targetFile = $img_loc.$fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif']; 
        
        if (in_array($fileType, $allowed)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $imagePath = $targetFile; 
            }
        }
    }

    $post->addPost($imagePath);

    header("Location: PostList.php?added=1");
    exit;
}
?>
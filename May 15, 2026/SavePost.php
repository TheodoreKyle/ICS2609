<?php

require_once("Post.php");

if(isset($_POST['save'])) {

    $post = new Post();

    $post->setTitle($_POST['title']);
    $post->setBody($_POST['body']);
    $post->setAuthor($_POST['author']);

    $post->addPost();

    header("Location: PostList.php?added=1");
    exit;
}
?>
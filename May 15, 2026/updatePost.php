<?php

require_once("Post.php");

if(isset($_POST['edit'])) {

    $p = new Post();

    $p->setId($_POST['id']);
    $p->setTitle($_POST['title']);
    $p->setBody($_POST['body']);
    $p->setAuthor($_POST['author']);

    $p->updatePost();

    header("Location: PostList.php?updated=1");
    exit;
}
?>
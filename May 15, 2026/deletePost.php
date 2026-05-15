<?php

require_once("Post.php");

if(isset($_GET['id'])) {

    $p = new Post();

    $p->setId($_GET['id']);

    $p->deletePost();

    header("Location: PostList.php?deleted=1");
    exit;
}
?>
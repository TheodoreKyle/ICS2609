<?php
    require_once("Post.php");

    if (isset($_POST['save'])) {
        $p = new Post(); 
        $p->setTitle($_POST['title']);
        $p->setBody($_POST['body']); 
        $p->setAuthor($_POST['author']);

        $p->addPost(); 
        echo "<script>alert('Data Inserted Successfully'); document.location='PostList.php'</script>";
    }
?>
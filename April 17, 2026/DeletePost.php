<?php
    require_once("Post.php"); 
    
    if (isset($_GET['id'])) {
        $p = new Post(); 
        $p->setId($_GET['id']); 

        $p->deletePost();
        echo "<script>alert('Data Deleted Successfully'); document.location='PostList.php'</script>";
    }
?>
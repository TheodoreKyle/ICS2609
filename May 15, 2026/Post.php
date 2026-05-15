<?php

require_once("Database.php");

class Post {

    private $id;
    private $title;
    private $body;
    private $author;

    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // GETTERS

    function getId(){
        return $this->id;
    }

    function getTitle(){
        return $this->title;
    }

    function getBody(){
        return $this->body;
    }

    function getAuthor(){
        return $this->author;
    }

    // SETTERS

    function setId($id){
        $this->id = $id;
    }

    function setTitle($title){
        $this->title = $title;
    }

    function setBody($body){
        $this->body = $body;
    }

    function setAuthor($author){
        $this->author = $author;
    }

    // GET ALL POSTS

    function getPosts(){

        $this->db->query("SELECT * FROM posts ORDER BY id DESC");

        return $this->db->resultSet();
    }

    // GET SINGLE POST

    function getPost($id){

        $this->db->query("SELECT * FROM posts WHERE id = :id");

        $this->db->bind(":id", $id);

        return $this->db->single();
    }

    // ADD POST

    function addPost(){

        $this->db->query("
            INSERT INTO posts(title, body, author)
            VALUES(:title, :body, :author)
        ");

        $this->db->bind(":title", $this->title);
        $this->db->bind(":body", $this->body);
        $this->db->bind(":author", $this->author);

        return $this->db->execute();
    }

    // UPDATE POST

    function updatePost(){

        $this->db->query("
            UPDATE posts
            SET
                title = :title,
                body = :body,
                author = :author
            WHERE id = :id
        ");

        $this->db->bind(":id", $this->id);
        $this->db->bind(":title", $this->title);
        $this->db->bind(":body", $this->body);
        $this->db->bind(":author", $this->author);

        return $this->db->execute();
    }

    // DELETE POST

    function deletePost(){

        $this->db->query("DELETE FROM posts WHERE id = :id");

        $this->db->bind(":id", $this->id);

        return $this->db->execute();
    }
}
?>
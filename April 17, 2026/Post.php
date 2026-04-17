<?php
    require_once("Database.php"); 
    
    // $db = new Database(); 
    // echo $db->isConnected() ? "DB Connected" : "DB Not Connected";

    // $db->query("SELECT * FROM MOCK_DATA");
    // var_dump($db->resultSet());

    class Post {
        private $id; 
        private $title;
        private $body;
        private $author;
        private $db;

        function __construct() {
            $this->db = new Database();     
        }

        // Getters
        function getId() {
            return $this->id; 
        }

        function getTitle() {
            return $this->title; 
        }

        function getBody() {
            return $this->body;
        }

        function getAuthor() {
            return $this->author;
        }

        // Setters
        function setId($id) {
            $this->id = $id;
        }

        function setTitle($title) {
            $this->title = $title;
        }

        function setBody($body) {
            $this->body = $body;
        }

        function setAuthor($author) {
            $this->author = $author;
        }

        function getPosts(){
            $this->db->query("SELECT * FROM post");
            return $this->db->resultSet(); 
        }

        function getPost($id) {
            $this->db->query("SELECT * FROM post WHERE id = :id");
            $this->db->bind(":id", $id);
            return $this->db->singleResult(); 
        }

        function addPost() {
            $this->db->query("INSERT INTO post (title, body, author) VALUES (:title, :body, :author)"); 
            $this->db->bind(":title", $this->title);
            $this->db->bind(":body", $this->body);
            $this->db->bind(":author", $this->author);
            $this->db->execute(); 
        }

        function deletePost() {
            $this->db->query("DELETE FROM post WHERE id = :id");
            $this->db->bind(":id", $this->id);
            $this->db->execute(); 
        }
    }
?>
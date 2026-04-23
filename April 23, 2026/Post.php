<?php
    require_once("Database.php"); 
    
    // $db = new Database(); 
    // echo $db->isConnected() ? "DB Connected" : "DB Not Connected";

    // $db->query("SELECT * FROM MOCK_DATA");
    // var_dump($db->resultSet());

    class Post {
        private $id; 
        private $product_name;
        private $description;
        private $price;
        private $stock_quantity;
        private $category;
        private $db;

        function __construct() {
            $this->db = new Database();     
        }

        // Getters
        function getId() {
            return $this->id; 
        }

        function getProductName() {
            return $this->product_name;
        }

        function getDescription() {
            return $this->description;
        }

        function getPrice() {
            return $this->price;
        }

        function getStockQuantity() {
            return $this->stock_quantity;
        }

        function getCategory() {
            return $this->category;
        }

        // Setters
        function setId($id) {
            $this->id = $id;
        }

        function setProductName($product_name) {
            $this->product_name = $product_name;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setPrice($price) {
            $this->price = $price;
        }

        function setStockQuantity($stock_quantity) {
            $this->stock_quantity = $stock_quantity;
        }

        function setCategory($category) {
            $this->category = $category;
        }

        function getPosts(){
            $this->db->query("SELECT * FROM inventory");
            return $this->db->resultSet(); 
        }

        function getPost($id) {
            $this->db->query("SELECT * FROM inventory WHERE id = :id");
            $this->db->bind(":id", $id);
            return $this->db->singleResult(); 
        }

        function addPost() {
            $this->db->query("INSERT INTO inventory (product_name, description, price, stock_quantity, category) VALUES (:product_name, :description, :price, :stock_quantity, :category)"); 
            $this->db->bind(":product_name", $this->product_name);
            $this->db->bind(":description", $this->description);
            $this->db->bind(":price", $this->price);
            $this->db->bind(":stock_quantity", $this->stock_quantity);
            $this->db->bind(":category", $this->category);
            $this->db->execute(); 
        }

        function updatePost() {
            $this->db->query("UPDATE inventory SET product_name = :product_name, description = :description, price = :price, stock_quantity = :stock_quantity, category = :category WHERE id = :id");
            $this->db->bind(":id", $this->id);
            $this->db->bind(":product_name", $this->product_name);
            $this->db->bind(":description", $this->description);
            $this->db->bind(":price", $this->price);
            $this->db->bind(":stock_quantity", $this->stock_quantity);
            $this->db->bind(":category", $this->category);
            $this->db->execute();
        }

        function deletePost() {
            $this->db->query("DELETE FROM inventory WHERE id = :id");
            $this->db->bind(":id", $this->id);
            $this->db->execute(); 
        }
    }
?>
<?php

class Product {

    private string $id;
    private string $name;
    private float $price;
    private string $category;
    private int $stock;
    private string $createdAt;

    /*
    HINT:
    - Generate unique ID using uniqid("prod_")
    - Sanitize text using htmlspecialchars()
    - Cast price to float
    - Cast stock to int
    - Set timestamp using date("Y-m-d H:i:s")
    */

    public function __construct($name, $price, $category, $stock) {

        // TODO: $this->id = ?
        $this -> id = uniqid("prod_"); 

        // TODO: $this->name = ?
        $this -> name = htmlspecialchars($name);

        // TODO: $this->price = ?
        $this -> price = $price;

        // TODO: $this->category = ?
        $this -> category = htmlspecialchars($category);

        // TODO: $this->stock = ?
        $this -> stock = $stock;

        // TODO: $this->createdAt = ?
        $this -> createdAt = date("Y-m-d H:i:s"); 
    }

    /*
    HINT:
    Return associative array of ALL properties
    */
    public function toArray(): array {

        return [
            // "id" => ?
            // "name" => ?
            // "price" => ?
            // "category" => ?
            // "stock" => ?
            // "createdAt" => ?
            "id" => $this->id,
            "name" => $this->name,
            "price" => $this->price,
            "category" => $this->category,
            "stock" => $this-> stock,
            "createdAt" => $this->createdAt
        ];
    }
}
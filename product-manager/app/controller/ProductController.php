<?php

require_once "app/models/Product.php";

class ProductController {

    private string $file = "storage/products.json";

    public function handleRequest() {

        /*
        HINT:
        1. If POST → process form submission
        2. Always load products
        3. Pass products to view
        */

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            /*
            HINT:
            1. Get $_POST values
            2. Validate empty fields
            3. Create Product object
            4. Convert to array
            5. Append to existing products
            6. Save JSON file
            */
            $name = $_POST["name"] ?? "";
            $price = $_POST["price"] ?? "";
            $category = $_POST["category"] ?? ""; 
            $stock = $_POST["stock"] ?? ""; 

            if ($name && $price && $category && $stock) {
                $product = new Product($name, $price, $category, $stock);
                $products = $this->readProducts();
                $products[] = $product -> toArray(); 
                $this -> saveProducts($products); 
            } else {
                $error = "All fields are required!"; 
            }
        }

        // HINT: Always get updated product list
        $products = $this->readProducts();

        // HINT: Load view and make $products available
        require "views/products.php";
    }

    /*
    HINT:
    - If file doesn't exist → return []
    - Use file_get_contents()
    - Use json_decode(..., true)
    */
    private function readProducts(): array {

        // TODO
        if (!file_exists($this->file)) {
            return [];
        }
        $data = file_get_contents($this->file);
        if (empty($data)) {
            return [];
        }
        $decoded = json_decode($data, true);
        return is_array($decoded) ? $decoded : [];
    }

    /*
    HINT:
    Use:
    file_put_contents(
        $this->file,
        json_encode($products, JSON_PRETTY_PRINT)
    );
    */
    private function saveProducts(array $products): void {

        // TODO
        file_put_contents($this -> file, json_encode($products, JSON_PRETTY_PRINT));
    }
}
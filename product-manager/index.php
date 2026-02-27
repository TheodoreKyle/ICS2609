<?php

/*
HINT:
This is the entry point of the application.
It should:
1. Require ProductController
2. Create controller object
3. Call handleRequest()
*/

require_once "app/controller/ProductController.php";

// TODO:
$controller = new ProductController(); 
$controller -> handleRequest(); 
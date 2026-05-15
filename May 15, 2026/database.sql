CREATE DATABASE crud_db;

USE crud_db;

CREATE TABLE posts (

    id INT AUTO_INCREMENT PRIMARY KEY,

    title VARCHAR(255) NOT NULL,

    body TEXT,

    author VARCHAR(100)

);
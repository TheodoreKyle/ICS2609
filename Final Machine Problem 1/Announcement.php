<?php
require_once("Database.php");

/*

DEBUGGING CHALLENGE (10 BUGS INSIDE THIS FILE)

HINTS:
1. Check SQL keywords carefully
2. Check table names
3. Check missing execute()
4. Check missing bind parameters
5. Check wrong method calls
6. Check SQL syntax
7. Check missing RETURN statements
8. Check variable usage
9. Check class properties
10. Check PDO query execution flow

*/

class Announcement {

    private $id;
    private $title;
    private $content;
    private $author;

    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // =====================
    // SETTERS
    // =====================
    function setTitle($title){
        $this->title = $title;
    }

    function setContent($content){
        $this->content = $content;
    }

    function setAuthor($author){
        $this->author = $author;
    }

    // =====================
    // INSERT ANNOUNCEMENT (BUGGY)
    // =====================
    function addAnnouncement(){

        // BUG 1,2,3,4
        $this->db->query("INSERT INTO announcements (title, content, author) VALUES (:title, :content, :author)");

        $this->db->bind(":title", $this->title);
        $this->db->bind(":content", $this->content);

        // BUG 5 (missing author bind)
        $this->db->bind(":author", $this->author);
        // BUG 6 (missing execute return handling)
        $this->db->execute(); 
    }

    // =====================
    // GET ALL (BUGGY)
    // =====================
    function getAnnouncements(){

        // BUG 7,8
        $this->db->query("SELECT * FROM announcements");

        $result = $this->db->resultSet();

        // BUG 9 (wrong return handling)
        return $result; 
    }
}
?>
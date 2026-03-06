<?php

class User {

    private $fullname;
    private $email;
    private $username;
    private $password;
    private $confirm;

    private $file = "users.json";


    /*
    TODO
    Method: setUserData()

    Accept parameters:
    fullname
    email
    username
    password
    confirm_password

    Store them in class properties
    */

    public function setUserData($fullname, $email, $username, $password, $confirm) {
        $this -> fullname = $fullname; 
        $this -> email = $email;
        $this -> username = $username; 
        $this -> password = $password;
        $this -> confirm = $confirm;
    }

    /*
    TODO
    Method: validateInput()

    Check if any field is empty
    Return TRUE or FALSE
    */

    public function validateInput() {
        if (empty($this -> fullname) || empty($this -> email) || empty($this -> username) ||
            empty($this -> password) || empty($this -> confirm)) {
                return true; 
            } else {
                return false; 
            }
    }

    /*
    TODO
    Method: checkPasswordMatch()

    Check if password equals confirm password
    Return TRUE or FALSE
    */

    public function checkPasswordMatch() {
        if ($this -> password !== $this -> confirm) {
            return true; 
        } else {
            return false;
        }
    }

    /*
    TODO
    Method: saveUser()

    Steps:
    1. Create user array
    2. Read users.json
    3. Convert JSON to array
    4. Add new user
    5. Convert back to JSON
    6. Save file
    */

    public function saveUser() {
        $user = [
            "fullname" => $this -> fullname,
            "email" => $this -> email,
            "username" => $this -> username, 
            "password" => $this -> password
        ];

        $file = "users.json"; 
        if (file_exists($file)) {
            $json = file_get_contents($file);
            $users = json_decode($json, true); 
        } else {
            $users = []; 
        }

        $users[] = $user; 

        $jsonData = json_encode($users, JSON_PRETTY_PRINT);
        file_put_contents($file, $jsonData); 

    }

    /*
    TODO
    Method: getUsers()

    Read users.json
    Return array of users
    */

    public function getUsers() {
        if (file_exists($this -> file)) {
            $json = file_get_contents($this->file);
            $users = json_decode($json, true);
            return $users; 
        } else {
            return []; 
        }

    }

    /*
    TODO
    Method: displayUsersTable()

    1. Call getUsers()
    2. Loop through users
    3. Print HTML table rows
    */

    public function displayUsersTable() {
        $users = $this -> getUsers() ?? []; ?>
        <table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
            <?php foreach ($users as $user) { ?>
            <tr>
                <td> <?php echo $user["fullname"] ?> </td>
                <td> <?php echo $user["email"] ?> </td>
                <td> <?php echo $user["username"] ?> </td>
            </tr>
            <?php } ?>
        </table>
    <?php } 
} ?>
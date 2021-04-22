<?php 

class User {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function signup($data) {
        $this->db->query('INSERT INTO users (username, email, phoneNumber, age, password) VALUES(:username, :email,:phoneNumber, :age, :password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phoneNumber', $data['phoneNumber']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;
        
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function update($data) {
        $this->db->query('UPDATE users SET username = :username, email = :email, phoneNumber = :phoneNumber, age = :age WHERE id = :id');

        $this->db->bind(":id", $data[id]);
        $this->db->bind(":username", $data[username]);
        $this->db->bind(":email", $data[email]);
        $this->db->bind(":phoneNumber", $data[phoneNumber]);
        $this->db->bind(":age", $data[age]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserById($id) {
        $this->db->query('SELECT * FROM users WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function findAllUsers() {
        $this->db->query('SELECT * FROM users');

        $results = $this->db->resultSet();

        return $results;
    }

    public function deleteUser($id) {
        $this->db->query('DELETE FROM users WHERE id = :id');

        $this->db->bind(':id', $id);

        $this->db->execute();
    }
}
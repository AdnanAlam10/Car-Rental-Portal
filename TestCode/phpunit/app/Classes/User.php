<?php

namespace App\Classes;

class User {
    private $username = NULL;
    private $password = NULL;
    private $email = NULL;
    private $phoneNumber = NULL;
    private $age = NULL;
    
    public function setUsername($username_) {
        $nameValidation = "/^[a-zA-Z0-9]*$/";
        if (preg_match($nameValidation, $username_)) {
            $this->username = trim($username_);
        }
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password_) {

        if (strlen($password_) > 7 ) {
            $this->password = $password_;
        }
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email_) {
        if (filter_var($email_, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email_;
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setAge($age_) {
        if ($age_ >= 21) {
            $this->age = $age_;
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function setPhonenumber($phoneNumber_) {
        $numberValidation = "/^(01)[0-9]{9}$/";
        
        if (strlen($phoneNumber_) > 9) {
            $this->phoneNumber = $phoneNumber_;
        }
    }

    public function getPhonenumber() {
        return $this->phoneNumber;
    }

}
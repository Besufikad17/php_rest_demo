<?php

namespace API\Models;

class User {
    private $id;
    private $fname;
    private $lname;

    private $email;
    private $phone_number;
    private $password;

    public function __construct($id, $fname, $lname, $email, $phone_number, $password){
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }
    public function getFirstName() {
        return $this->fname;
    }

    public function getLastName() {
        return $this->lname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
    }

    public function getPassword() {
        return $this->password;
    }
}


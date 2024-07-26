<?php

namespace Utils\Helpers;

class Validation {
    static function validateForm() {
        return isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["phone_number"]);
    }     
}

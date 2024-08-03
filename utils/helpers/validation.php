<?php

namespace Utils\Helpers;

class Validation {
    static function validateForm($data) {
        return isset($data["first_name"]) && 
            isset($data["last_name"]) && 
            isset($data["email"]) && 
            isset($data["phone_number"]) && 
            isset($data["password"]);
    }     
}

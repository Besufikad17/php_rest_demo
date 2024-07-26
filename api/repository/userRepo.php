<?php

namespace API\Repository;

Use API\Models\User;
use Utils\Helpers\DBConnection; 

class UserRepository {
	private DBConnection $db;

	public function __construct($db) {
		$this->db = $db;
	}

	public function create(User $user) {
		$fname = $user->getFirstName();
		$lname = $user->getLastName();
		$email = $user->getEmail();
		$phone_number = $user->getPhoneNumber();
		$password = $user->getPassword();

		$result = $this->db->runQuery(
			"INSERT INTO users(first_name, last_name, email, phone_number) VALUES ('$fname', '$lname', '$email', '$phone_number', '$password')");
		return $result;	
	}
}

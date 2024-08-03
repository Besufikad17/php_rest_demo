<?php

namespace API\Controllers;
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . "./../../utils/helpers/validation.php";
require_once __DIR__ . "./../models/user.php";
require_once __DIR__ . "./../repository/userRepo.php";

use API\Models\User;
use API\Repository\UserRepository;
use Utils\Helpers\Validation;

class AuthController {
	private UserRepository $userRepo;

	public function __construct(UserRepository $userRepo) {
		$this->userRepo = $userRepo;
	}

	public function signup() {
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$data = json_decode(file_get_contents("php://input"), true);
			$isValid =  Validation::validateForm($data);

			if($isValid) {
				$user = new User(
					"",
					$data["first_name"],
					$data["last_name"],
					$data["email"],
					$data["phone_number"],
					$data["password"]
				);
	
				$response = $this->userRepo->create($user);
				echo json_encode(
					array(
						"message" => "User successfully registered!!",
						"data" => $response
					)
				);
			}else {
				http_response_code(405);
				echo json_encode(array("message" => "Please enter all fields!!"));
			}	
		} else {
			http_response_code(405);
			echo json_encode(array("message" => "Invalid request!!"));
		}
	}
}



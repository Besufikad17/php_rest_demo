<?php
require_once __DIR__ . "./../utils/helpers/db.php";
require_once __DIR__ . "/repository/userRepo.php";
require_once __DIR__ . "/controllers/authController.php";

use API\Repository\UserRepository;
use Utils\Helpers\DBConnection;
use API\Controllers\AuthController;

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
      case '/auth/signup':
	 $db = new DBConnection();
	 $repo = new UserRepository($db);
	 $controller = new AuthController($repo);
	 $controller->signup();
      break;
   default:
      http_response_code(404);
      echo json_encode(array("message" => "Invalid request!!"));
}

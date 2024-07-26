<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>
		<link href="./assets/css/output.css" rel="stylesheet">
	</head>
	<body>
		<div class="flex flex-col items-center justify-center p-10">
			<h1 class="text-2xl mb-6">Register</h1>
			<form class="flex flex-col mt-4" method="post" action="index.php">
				<div class="flex flex-col md:flex-row items-center md:space-x-6 justify-between">
					<div class="flex flex-col">
						<label class="mb-2">First name</label>
						<input class="border-gray-700 border-2 p-1 text-sm rounded-md" type="text" name="first-name" placeholder="Enter your first name" required />
					</div>
					<div class="flex flex-col mt-4 md:mt-0">
						<label class="mb-2">Last name</label>
						<input class="border-gray-700 border-2 p-1 text-sm rounded-md" type="text" name="last-name" placeholder="Enter your last name" required />
					</div>
				</div>
				<div class="flex flex-col mt-4">
					<label class="mb-2">Email</label>
					<input class="border-gray-700 border-2 p-1 text-sm rounded-md" type="email" name="email" placeholder="Enter email" required />
				</div>
				<div class="flex flex-col mt-4">
					<label class="mb-2">Phone number</label>
					<input class="border-gray-700 border-2 p-1 text-sm rounded-md" type="text" name="phone-number" placeholder="Enter phone number" required />
				</div>
				<div class="flex flex-col mt-4">
					<label class="mb-2">Password</label>
					<input class="border-gray-700 border-2 p-1 text-sm rounded-md" type="password" name="password" placeholder="Enter password" required />
				</div>
				<div class="flex flex-col mt-4">
					<button class="py-2 bg-black text-white rounded-md" type="submit">Done</button>	
				</div>
			</form>
		</div>
	</body>
	<?php
		use API\Models\User;
		use API\Repository\UserRepository;
		use Utils\Helpers\DBConnection;
		use Utils\Helpers\Validation;

		Validation::validateForm();

		$user = new User(
			"",
			$_POST["first_name"],
			$_POST["last_name"],
			$_POST["email"],
			$_POST["phone_number"],
			$_POST["password"]
		);
		
		$repo = new UserRepository(new DBConnection());
		$repo->create($user);
	?>
</html>

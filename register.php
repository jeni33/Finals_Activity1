<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			font-family: 'Roboto', sans-serif;
			background-color: #FEFAE0; 
			color: #333;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.register {
			background-color: #F2EED7; 
			width: 100%;
			max-width: 450px;
			padding: 40px;
			border-radius: 8px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			text-align: center;
			border: 1px solid #798645; 
		}
		h1 {
			font-size: 1.8em;
			color: #626F47;
			margin-bottom: 20px;
		}
		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 12px;
			margin: 10px 0;
			border: 1px solid #BDC3C7;
			border-radius: 5px;
			font-size: 1em;
			background-color: #FEFAE0;
		}
		input[type="submit"] {
			width: 100%;
			padding: 12px;
			background-color: #798645;
			color: white;
			font-size: 1.1em;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
		}
		input[type="submit"]:hover {
			background-color: #626F47; 
		}
		a {
			color: #626F47; 
			text-decoration: none;
			font-size: 1.1em;
			position: absolute; 
			top: 20px; 
			left: 20px; 
		}

		a:hover {
			color: #798645; 
		}
		.status-message {
			font-size: 1.1em;
			margin-bottom: 20px;
			padding: 15px;
			border-radius: 5px;
			text-align: center;
		}
		.success {
			background-color: #27AE60;
			color: white;
		}
		.error {
			background-color: #E74C3C;
			color: white;
		}
	</style>
</head>
<body>

	<a href="login.php">Login Page</a>
	
	<div class="register">
		<h1>Register Here to Create an Account!</h1>
		
		<?php  
		if (isset($_SESSION['message']) && isset($_SESSION['status'])) {
			$statusClass = $_SESSION['status'] == "200" ? "success" : "error";
			echo "<div class='status-message $statusClass'>{$_SESSION['message']}</div>";
			unset($_SESSION['message']);
			unset($_SESSION['status']);
		}
		?>

		<form action="core/handleForms.php" method="POST">
			<p>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" required>
			</p>
			<p>
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" id="first_name" required>
			</p>
			<p>
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" id="last_name" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</p>
			<p>
				<label for="confirm_password">Confirm Password</label>
				<input type="password" name="confirm_password" id="confirm_password" required>
			</p>
			<p>
				<input type="submit" name="insertNewUserBtn" value="Register">
			</p>
		</form>
	</div>

</body>
</html>

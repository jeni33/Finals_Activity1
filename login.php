<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<style>
		/* Global reset */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		/* Body styling */
		body {
			font-family: 'Roboto', sans-serif;
			background-color: #FEFAE0; /* Soft cream background */
			color: #333;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		/* Main container for the login form */
		.login {
			background-color: #F2EED7; /* Very light cream for the form background */
			width: 100%;
			max-width: 400px;
			padding: 40px;
			border-radius: 8px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			text-align: center;
			border: 1px solid #798645; /* Muted green border for a subtle touch */
		}

		/* Heading styling */
		h1 {
			font-size: 1.8em;
			color: #626F47; /* Deep green for the heading */
			margin-bottom: 20px;
		}

		/* Form inputs */
		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 12px;
			margin: 10px 0;
			border: 1px solid #BDC3C7;
			border-radius: 5px;
			font-size: 1em;
			background-color: #FEFAE0; /* Soft cream background for input fields */
		}

		/* Submit button styling */
		input[type="submit"] {
			width: 100%;
			padding: 12px;
			background-color: #798645; /* Muted green for the button */
			color: white;
			font-size: 1.1em;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		/* Submit button hover effect */
		input[type="submit"]:hover {
			background-color: #626F47; /* Darker green when hovered */
		}

		/* Link styling for account creation */
		p {
			margin-top: 15px;
			font-size: 1em;
		}

		p a {
			color: #626F47; /* Deep green for links */
			text-decoration: none;
			transition: color 0.3s;
		}

		p a:hover {
			color: #798645; /* Muted green on hover */
		}

		/* Success or error message */
		.message {
			font-size: 1.1em;
			margin-bottom: 20px;
			padding: 15px;
			border-radius: 5px;
			text-align: center;
		}

		.success {
			background-color: #798645; 
			color: white;
		}

		.error {
			background-color: #F2EED7;
			color: #626F47;
		}

		/* Urgent message inside the login container */
		.urgent-message {
			background-color: #FEFAE0;
			color: #626F47;
			font-weight: bold;
			font-size: 1em;
			padding: 10px;
			border: 1px solid #BDC3C7;
			border-radius: 5px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

	<div class="login">
		<h1>Login to Apply for Humanitarian Aid Worker Roles</h1>
		<?php  
		if (isset($_SESSION['message']) && isset($_SESSION['status'])) {
			$statusClass = ($_SESSION['status'] == "200") ? "success" : "error";
			echo "<div class='message $statusClass'>{$_SESSION['message']}</div>";
		}
		unset($_SESSION['message']);
		unset($_SESSION['status']);
		?>
		<div class="urgent-message">
			Humanitarian Aid Worker: Urgent need for professionals in crisis zones!
		</div>
		<form action="core/handleForms.php" method="POST">
			<p>
				<label for="username">Username</label>
				<input type="text" name="username" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password" required>
			</p>
			<p>
				<input type="submit" name="loginUserBtn" value="Login">
			</p>
		</form>
		<p>Don't have an account? You may register <a href="register.php">here</a></p>
	</div>

</body>
</html>
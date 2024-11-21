<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<style>

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Roboto', sans-serif;
			background-color: #FEFAE0;
			color: #333;
			padding: 20px;
		}

		a {
			display: inline-block;
			margin-bottom: 20px;
			color: #798645;
			text-decoration: none;
			font-weight: 500;
			font-size: 1em;
		}

		a:hover {
			text-decoration: underline;
			color: #626F47;
		}

		h1 {
			font-size: 1.5em;
			text-align: center;
			color: #626F47;
			margin-bottom: 20px;
		}

		form {
			background-color: #F1EBDA;
			width: 80%;
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		}

		input {
			font-size: 1.2em;
			height: 40px;
			width: 100%;
			background-color: #FDE7BB;
			border: 1px solid #BDC3C7;
			border-radius: 5px;
			margin-bottom: 15px;
			padding: 10px;
		}

		input[type="submit"] {
			background-color: #C9E6F0;
			border: 1px solid #BDC3C7;
			cursor: pointer;
			width: 100%;
			font-size: 1.2em;
			padding: 15px;
			margin-top: 20px;
		}

		input[type="submit"]:hover {
			background-color: #A2D4E5;
		}

		label {
			display: block;
			margin-bottom: 8px;
			font-weight: 500;
		}
	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<h1>Fill this up to insert a new applicant for Humanitarian Staffs</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" required>
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name" required>
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" required>
		</p>
		<p>
			<label for="age">Age</label> 
			<input type="text" name="age" required>
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email" required>
		</p>
		<p>
			<label for="contact_number">Contact Number</label> 
			<input type="text" name="contact_number" required>
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address" required>
		</p>
		<p>
			<label for="language_skills">Language Skills</label> 
			<input type="text" name="language_skills" required>
		</p>
		<p>
			<label for="availability">Availability</label> 
			<input type="text" name="availability" required>
		</p>
		<p>
			<label for="experience_level">Experience Level</label> 
			<input type="text" name="experience_level" required>
		</p>
		<p>
			<input type="submit" name="insertApplicantBtn" value="Submit">
		</p>
	</form>
</body>
</html>
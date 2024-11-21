<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Page</title>
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
			background-color: #FEFAE0;
			color: #333;
			padding: 20px;
		}

		/* Back link */
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

		/* Edit container */
		.edit {
			background-color: #FDE7BB;
			width: 40%;
			margin: 0 auto;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			border: 1px solid #BDC3C7;
			text-align: center;
		}

		.edit h1 {
			margin-bottom: 20px;
			color: #626F47;
			font-size: 1.5em;
		}

		/* Form styling */
		form {
			width: 100%;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		form p {
			width: 100%;
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 15px;
		}

		form label {
			font-weight: 500;
			color: #333;
			font-size: 1em;
			width: 40%;
			text-align: right;
			margin-right: 10px;
		}

		form input[type="text"],
		form input[type="email"] {
			width: 50%;
			padding: 8px 10px;
			border: 1px solid #BDC3C7;
			border-radius: 5px;
			background-color: #FFF7D1;
			font-size: 1em;
		}

		form input[type="submit"] {
			background-color: #798645;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 1em;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		form input[type="submit"]:hover {
			background-color: #626F47;
		}

		form input:focus {
			outline: none;
			border-color: #798645;
		}
	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['id']); ?>
	<div class="edit">
		<h1>Edit the Applicant's Details</h1>
		<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
			<p>
				<label for="firstName">First Name</label> 
				<input type="text" name="first_name" value="<?php echo $getApplicantByID['first_name']; ?>">
			</p>
			<p>
				<label for="lastName">Last Name</label> 
				<input type="text" name="last_name" value="<?php echo $getApplicantByID['last_name']; ?>">
			</p>
			<p>
				<label for="gender">Gender</label> 
				<input type="text" name="gender" value="<?php echo $getApplicantByID['gender']; ?>">
			</p>
			<p>
				<label for="age">Age</label> 
				<input type="text" name="age" value="<?php echo $getApplicantByID['age']; ?>">
			</p>
			<p>
				<label for="email">Email</label> 
				<input type="email" name="email" value="<?php echo $getApplicantByID['email']; ?>">
			</p>
			<p>
				<label for="contactNumber">Contact Number</label> 
				<input type="text" name="contact_number" value="<?php echo $getApplicantByID['contact_number']; ?>">
			</p>
			<p>
				<label for="address">Address</label> 
				<input type="text" name="address" value="<?php echo $getApplicantByID['address']; ?>">
			</p>
			<p>
				<label for="languageSkills">Language Skills</label> 
				<input type="text" name="language_skills" value="<?php echo $getApplicantByID['language_skills']; ?>">
			</p>
			<p>
				<label for="availability">Availability</label> 
				<input type="text" name="availability" value="<?php echo $getApplicantByID['availability']; ?>">
			</p>
			<p>
				<label for="experienceLevel">Experience Level</label> 
				<input type="text" name="experience_level" value="<?php echo $getApplicantByID['experience_level']; ?>">
			</p>
			<p>
				<input type="submit" value="Save" name="editApplicantBtn">
			</p>
		</form>
	</div>
</body>
</html>
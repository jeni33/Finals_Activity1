<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Applicant</title>
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

		/* Container styling */
		.container {
			background-color: #FFF7D1;
			padding: 20px;
			border: 1px solid #BDC3C7;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			max-width: 600px;
			margin: 0 auto;
		}

		.container h2 {
			font-size: 1.1em;
			margin-bottom: 10px;
			color: #333;
		}

		/* Page title */
		h1 {
			font-size: 1.5em;
			text-align: center;
			color: #626F47;
			margin-bottom: 20px;
		}

		/* Delete button */
		.deleteBtn form {
			text-align: right;
		}

		.deleteBtn input[type="submit"] {
			background-color: #E74C3C;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 1em;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.deleteBtn input[type="submit"]:hover {
			background-color: #C0392B;
		}

		.deleteBtn input[type="submit"]:focus {
			outline: none;
		}
	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<h1>Are you sure you want to delete this applicant?</h1>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['id']); ?>
	<div class="container">
		<h2><strong>First Name:</strong> <?php echo $getApplicantByID['first_name']; ?></h2>
		<h2><strong>Last Name:</strong> <?php echo $getApplicantByID['last_name']; ?></h2>
		<h2><strong>Gender:</strong> <?php echo $getApplicantByID['gender']; ?></h2>
		<h2><strong>Age:</strong> <?php echo $getApplicantByID['age']; ?></h2>
		<h2><strong>Email:</strong> <?php echo $getApplicantByID['email']; ?></h2>
		<h2><strong>Contact Number:</strong> <?php echo $getApplicantByID['contact_number']; ?></h2>
		<h2><strong>Address:</strong> <?php echo $getApplicantByID['address']; ?></h2>
		<h2><strong>Language Skills:</strong> <?php echo $getApplicantByID['language_skills']; ?></h2>
		<h2><strong>Availability:</strong> <?php echo $getApplicantByID['availability']; ?></h2>
		<h2><strong>Experience Level:</strong> <?php echo $getApplicantByID['experience_level']; ?></h2>

		<div class="deleteBtn">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteApplicantBtn" value="Delete">
			</form>
		</div>
	</div>
</body>
</html>

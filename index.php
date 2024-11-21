<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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

		/* Greeting section */
		.greeting {
			text-align: center;
			margin-bottom: 20px;
			background-color: #FDE7BB;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			border: 1px solid #798645;
		}

		.greeting h1 {
			color: #626F47;
			margin-bottom: 10px;
		}

		.greeting h3 a {
			color: #626F47;
			text-decoration: none;
			font-weight: 500;
		}

		.greeting h3 a:hover {
			text-decoration: underline;
			color: #798645;
		}

		/* Search form */
		form {
			margin: 20px auto;
			text-align: center;
		}

		form input[type="text"] {
			width: 250px;
			padding: 10px;
			font-size: 1em;
			border: 1px solid #BDC3C7;
			border-radius: 5px;
			background-color: #FDE7BB;
		}

		form input[type="submit"] {
			padding: 10px 15px;
			font-size: 1em;
			border: none;
			background-color: #798645;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		form input[type="submit"]:hover {
			background-color: #626F47;
		}

		form a {
			display: inline-block;
			margin-top: 10px;
			color: #626F47;
			text-decoration: none;
		}

		form a:hover {
			text-decoration: underline;
			color: #798645;
		}

		/* Table styling */
		table {
			width: 100%;
			margin-top: 20px;
			border-collapse: collapse;
			text-align: center;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		}

		table th, table td {
			padding: 12px;
			border: 1px solid #BDC3C7;
			font-size: 0.95em;
		}

		table th {
			background-color: #CDC1FF;
			color: #333;
			font-weight: 500;
		}

		table td {
			background-color: #F2EED7;
		}

		table tr:hover td {
			background-color: #FEFAE0;
		}

		table a {
			color: #798645;
			text-decoration: none;
		}

		table a:hover {
			text-decoration: underline;
			color: #626F47;
		}

		/* Message styling */
		.message {
			margin: 20px auto;
			padding: 15px;
			font-size: 1.1em;
			border-radius: 5px;
			text-align: center;
		}

		.message.error {
			background-color: #F8D7DA;
			color: #721C24;
			border: 1px solid #F5C6CB;
		}

		.message.success {
			background-color: #D4EDDA;
			color: #155724;
			border: 1px solid #C3E6CB;
		}
	</style>
</head>
<body>
	<?php if (isset($_SESSION['message'])) { ?>
		<div class="message error">
			<?php echo $_SESSION['message']; ?>
		</div>
	<?php } unset($_SESSION['message']); ?>

	<div class="greeting">
		<h1>Hello, <?php echo $_SESSION['username']; ?>! Welcome to Humanitarian Aid Application System</h1>
		<h3><a href="core/handleForms.php?logoutUserBtn=1">Logout</a></h3>
	</div>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
		<input type="text" name="searchInput" placeholder="Search here">
		<input type="submit" name="searchBtn" value="Search">
		<p><a href="index.php">Clear Search Query</a> | <a href="insert.php">Insert New Applicant</a></p>
	</form>

	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Address</th>
			<th>Language Skills</th>
			<th>Availability</th>
			<th>Experience Level</th>
			<th>Date Added</th>
			<th>Action</th>
		</tr>
		<?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllApplicants = getAllApplicants($pdo); ?>
			<?php foreach ($getAllApplicants as $row) { ?>
				<tr>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact_number']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['language_skills']; ?></td>
					<td><?php echo $row['availability']; ?></td>
					<td><?php echo $row['experience_level']; ?></td>
					<td><?php echo $row['date_added']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
						<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> | 
						<a href="activity.php?id=<?php echo $row['id']; ?>">Activity Details</a>
					</td>
				</tr>
			<?php } ?>
		<?php } else { ?>
			<?php $searchForAnApplicant = searchForAnApplicant($pdo, $_GET['searchInput']); ?>
			<?php foreach ($searchForAnApplicant as $row) { ?>
				<tr>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact_number']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['language_skills']; ?></td>
					<td><?php echo $row['availability']; ?></td>
					<td><?php echo $row['experience_level']; ?></td>
					<td><?php echo $row['date_added']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
						<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> | 
						<a href="activity.php?id=<?php echo $row['id']; ?>">Activity Details</a>
					</td>
				</tr>
			<?php } ?>
		<?php } ?>
	</table>
</body>
</html>

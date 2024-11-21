<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Applicant Activity</title>
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

		/* Page title */
		h1 {
			font-size: 1.5em;
			text-align: center;
			color: #626F47;
			margin-bottom: 20px;
		}

		/* Table styling */
		table {
			width: 100%;
			margin: 20px auto;
			border-collapse: collapse;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		}

		th, td {
			border: 1px solid #BDC3C7;
			padding: 12px;
			text-align: center;
		}

		th {
			background-color: #CDC1FF;
			color: #333;
			font-weight: 500;
		}

		td {
			background-color: #FFF7D1;
			color: #333;
		}

		tr:nth-child(even) td {
			background-color: #FDF2C7;
		}
	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<h1>Activity Details</h1>
	<table>
		<tr>
			<th>Added By User ID</th>
			<th>Date Added</th>
			<th>Modified By User ID</th>
			<th>Last Updated</th>
		</tr>
		<?php $getAppliByID = getAppliByID($pdo, $_GET['id']); ?>
		<?php foreach ($getAppliByID as $row) { ?>
		<tr>
			<td><?php echo $row['added_by']; ?></td>
			<td><?php echo $row['date_added']; ?></td>
			<td><?php echo $row['modified_by']; ?></td>
			<td><?php echo $row['last_updated']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

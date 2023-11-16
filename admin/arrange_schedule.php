<?php
include_once('include/db.php');

$query = "SELECT * FROM `movie`";
$result = mysqli_query($conn,$query);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Arrange Schedule Page</title>
	<link rel="stylesheet" href="css/schedule.css">
</head>
<body>
<form action="arrange_schedule.php" method="post">
<?php while($row = mysqli_fetch_array($result)) { ?>
	<div>
		<label for="name">Movie Name</label>
		<option name="movie_name" value="movie_name">
			<select name="<?=$row['movie_name']?>" id=""></select>
		</option>																																																																																																																																																																																																																																																						
	</div>
	<table>
		<thead>
			<tr>
				<th>Time</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thurday</th>
				<th>Friday</th>
				<th>Saturday</th>
				<th>Sunday</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>2</td>
				<td>3</td>
			</tr>
		</tbody>
	</table>
</form>
</body>
</html>
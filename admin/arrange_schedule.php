<?php
include_once('include/db.php');

$query = "SELECT * FROM `movie`";
$result = mysqli_query($conn,$query);

if (isset($_POST['submit'])) {
	$name = $_POST['movie_name'];
	$start_time = $_POST['movie_start_time'];
	$end_time = $_POST['movie_end_time'];
	$upload = "UPDATE `movie` SET movie_start_time = $start_time, movie_end_time = $end_time WHERE movie_name = $name";
	if(mysqli_query($conn,$upload)) {
		echo "Information upload sucessfully";
	}else {
		echo "Information upload failed";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Arrange Schedule Page</title>
</head>
<body>
<form action="arrange_schedule.php" method="post">
	<table>
		<?php while($row = mysqli_fetch_array($result)) { ?>
		<tbody>
			<h1>Movie Schedule Page</h1>
			<tr>
				<th>Movies :</th>
				<td>
					<select name="movie_name" id="movie_name">
						<option></option>
						<option><?=$row['movie_name']?></option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Movie Start Time :</th>
				<td>
					<input type="date" name="movie_start_time">
				</td>
			</tr>
			<tr>
				<th>Movie End Time :</th>
				<td>
					<input type="date" name="movie_end_time">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="submit">Submit</button>
				</td>
			</tr>
		</tbody>
	 <?php } ?>
	</table>
</form>
</body>
</html>
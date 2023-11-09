<?php 
include_once('include/db.php');


if (isset($_FILES["movie_image"]) && isset($_FILES["movie_trailer"])) {
        // Process the first file
        $image1 = $_FILES["movie_image"]["tmp_name"];
        $image = "image/" . $_FILES["movie_image"]["name"];
        // Process the second file
        $trailer1 = $_FILES["movie_trailer"]["tmp_name"];
        $trailer = "trailer/" . $_FILES["movie_trailer"]["name"];
        $name = $_POST['movie_name'];
		$time = $_POST['movie_duration'];
		$description = $_POST['movie_description'];

       if (move_uploaded_file($trailer1, $trailer) && move_uploaded_file($image1, $image) ) {
           // Insert into database
		   echo $query = "INSERT INTO `movie` (`movie_name`, `movie_image`, `movie_duration`, `movie_description`, `movie_trailer`, `movie_status`, `release_date`) VALUES ('$name', '$newFilePath1', '$time', '$description', '$newFilePath2', 'now showing', '$release_date')";
           if (mysqli_query($conn, $query)) {
            echo "<script>alert('Sucessfully Add')</script>";
        }
    } else {
         echo "<script>window.location.href = 'movies.php';alert('Failed Add');</script>";
    }
if (isset($_POST['submit'])) {
	$name = $_POST['movie_name'];
	$time = $_POST['movie_duration'];
	$description = $_POST['movie_description'];

	if (isset($_FILES["movie_image"]) && isset($_FILES["movie_trailer"])) {
       // Process the first file
       $tmpFilePath1 = $_FILES["movie_image"]["tmp_name"];
       $newFilePath1 = "image/" . $_FILES["movie_image"]["name"];
       // Process the second file
       $tmpFilePath2 = $_FILES["movie_trailer"]["tmp_name"];
       $newFilePath2 = "trailer/" . $_FILES["movie_trailer"]["name"];
       $test = 'abc';
       if (move_uploaded_file($tmpFilePath2, $newFilePath2) && move_uploaded_file($tmpFilePath1, $newFilePath1)) {
           // Insert into database
           echo $query = "INSERT INTO movie (`movie_name`, `movie_image`, `movie_duration`, `movie_description`, `movie_trailer`, `movie_status`) VALUES ('$name', '$newFilePath1', '$time', $description, '$newFilePath2', 'now showing')";
           if (mysqli_query($conn, $query)) {
            echo "File uploaded successfully";
        }
    } else {
        echo "Failed to upload file.";
    }
       }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADD NEW MOVIE PAGE</title>
</head>
<body>
<form action="add_new.php" method='post' enctype="multipart/form-data">
	<div class="add_movies">
			<h2>Movies Details</h2>
			<div>
				<label for="movie_name">Name: </label>
			    <input type="text" name="movie_name">
			</div>
			<div>
				<label for="movie_image">Image: </label>
			    <input type="file" name="movie_image">
			</div>
			<div>
    <label for="movie_duration">Time: </label>
    <input type="text" name="movie_duration" id="movie_duration" placeholder="Enter movie duration (e.g., 1h 49m)">
</div>
<div>
    <label for="release_date">Release Date: </label>
    <input type="date" name="release_date">
</div>
			<div>
				<label for="movie_description">Description: </label>
			</div>
			<div>
				<textarea name="movie_description" rows="3" cols="30"></textarea>
			</div>
			<div>
				<label for="movie_trailer">Tralier: </label>
			    <input type="file" name="movie_trailer">
			</div>
			<div>
				<label for="submitbttn"></label>
				<button type="submit" name="submit">Submit</button> 
			</div>
		</div>
</form>
</body>
</html>
<?php
if (isset($_GET['id'])) {
    $movieId = $_GET['id'];

    include_once('include/db.php');

    $query = "DELETE FROM `movie` WHERE movie_id = $movieId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Movie deleted successfully!";
    } else {
        echo "<script>window.location.href = 'movies.php';alert('failed to delete');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Movie ID not provided";
}
?>
<?php 
session_start();
$server = "localhost";
$name = "root";
$pass = "";
$db= "online_movie_ticket_booking_system";

$conn = mysqli_connect($server, $name, $pass,$db);
 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
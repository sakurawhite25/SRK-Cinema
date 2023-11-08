<?php
include_once('include/db.php');
include('header/header.php');

$admin = "SELECT * FROM `admin`";
$result = mysqli_query($conn,$admin);
?>

<!DOCTYPE html>
<html>
<head>
  <title>INTERFACE ADMIN PAGE</title>
</head>
<body>
  <form action="index.php" method="post">
  </form>
</body>
</html>
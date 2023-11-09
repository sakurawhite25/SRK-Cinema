<?php
include_once('include/db.php');
$qry1 = "SELECT * FROM movie";
$sql1 = mysqli_query($conn,$qry1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
       .line-bar-menu {
    display: flex;
    justify-content: space-between;
    background-color: #333; /* 背景颜色 */
    color: #fff; /* 文字颜色 */
    padding: 10px;
}

.menu-item {
    padding: 10px 20px; /* 调整内边距以适应样式 */
    cursor: pointer; /* 鼠标指针样式 */
    transition: background-color 0.3s; /* 添加过渡效果 */
}

.menu-item.active {
    background-color: #f00; /* 活动选项的背景颜色 */
    color: #fff; /* 活动选项的文字颜色 */
}
    </style>

  <title>Customer Interface</title>
</head>
<div>
  <?php include('header/header.html'); ?>
  <script>
        function search() {
            // Get the input value
            var searchTerm = document.getElementById("searchInput").value;

            // You can perform your search logic here
            // For this example, we'll just display the search term in the results div
            document.getElementById("results").innerHTML = "You searched for: " + searchTerm;
        }
    </script>
  </div>
 
<body>

<div class="container">
  <br>
  <br>
  <br>
  <br>
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="image/2.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h2>Genshin Water God </h2 >
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="image/3.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h2>Digimon 02</h2>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="image/4.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h2>Spiderman 2</h2>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="line-bar-menu">
    <div class="menu-item active">Now Showing</div>
    <div class="menu-item">Coming Soon</div>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



<tr>
        <?php while($row = mysqli_fetch_array($sql1))  {?>
            <td><?=$row["movie_name"]?></td>
            <td><img src="<?=$row["movie_image"]?>" alt="Movie Image"></td>
            <td><?=$row["movie_description"]?></td>
            <td><?=$row["movie_duration"]?></td>
            <td><?=$row["release_date"]?></td>
            <td><?=$row["movie_type"]?></td>
            <td><?=$row["movie_status"]?></td>  
        </tr>
        <?php  }?>

</body>
</html> 
<?php
include_once('include/db.php');
$qry1 = "SELECT * FROM movie";
$sql1 = mysqli_query($conn, $qry1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>

    document.addEventListener('DOMContentLoaded', function () {
      function openVideoPopup(videoUrl) {
        console.log('Opening video popup for:', videoUrl);

        var popup = document.getElementById('videoPopup');
        var video = document.getElementById('popupVideo');

        video.src = videoUrl;
        popup.style.display = 'block';

        // Add an event listener to the background overlay
        var popupContent = document.querySelector('.popup-content');
        popupContent.addEventListener('click', function (event) {
          event.stopPropagation(); // Prevents the click from reaching the document
        });

        // Add an event listener to the document to close the popup when the user clicks outside of it
        document.addEventListener('click', closePopupOutside);
      }

      function closePopup() {
        var popup = document.getElementById('videoPopup');
        var video = document.getElementById('popupVideo');

        video.pause();
        video.src = '';
        popup.style.display = 'none';

        document.removeEventListener('click', closePopupOutside);
      }

      function closePopupOutside(event) {
        var popup = document.getElementById('videoPopup');

        if (!event.target.closest('.popup-content')) {
          closePopup();
        }
      }

    });

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
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
  <title>Customer Interface</title>
</head>
<div>
  <?php include('header/header.html'); ?>
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
          <img src="../Mov_images/2.jpg" alt="" style="width:100%;">
          <div class="carousel-caption">
            <h2>Genshin Water God </h2>
            <p></p>
          </div>
        </div>

        <div class="item">
          <img src="../Mov_images/3.jpg" alt="" style="width:100%;">
          <div class="carousel-caption">
            <h2>Digimon 02</h2>
            <p></p>
          </div>
        </div>

        <div class="item">
          <img src="../Mov_images/4.jpg" alt="" style="width:100%;">
          <div class="carousel-caption">
            <h2>Spiderman 2</h2>
            <p></p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="right: -100px;">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <table class="movie-listings">
    <tr>
        <td>
            <h2 style="color: white;">Now Showing</h2>
        </td>
    </tr>
    <tr>
        <?php
        $counter = 0;
        while ($row = mysqli_fetch_array($sql1)) {
            if ($row["movie_status"] == "Now Showing") {
                $counter++;
                if ($counter > 5) {
                    break; // 如果已显示了五部电影，退出循环
                }
        ?>
                <td class="movie">
                    <div>
                        <div>
                            <p>
                                <?= $row["movie_name"] ?>
                            </p>
                            <button onclick="openVideoPopup('<?= $row['movie_trailer'] ?>')">Watch Trailer</button>
                        </div>
                        <img src="<?= $row["movie_image"] ?>" alt="Movie Image" width="180" height="250">
                        <div>
                            <h5>Movie Description</h5>
                            <p>
                                <?= $row["movie_description"] ?>
                            </p>
                        </div>
                        <div>
                            <h5>Movie Duration</h5>
                            <p>
                                <?= $row["movie_duration"] ?>
                            </p>
                        </div>
                        <div>
                            <h5>Release Date</h5>
                            <p>
                                <?= $row["release_date"] ?>
                            </p>
                        </div>
                        <div>
                            <h5>Movie Type</h5>
                            <p>
                                <?= $row["movie_type"] ?>
                            </p>
                        </div>
                        <div>
                            <h5>Movie Status</h5>
                            <p>
                                <?= $row["movie_status"] ?>
                            </p>
                        </div>
                    </div>
                </td>
        <?php
            }
        }
        ?>
    </tr>
</table>



  <div class="popup" id="videoPopup">
    <div class="popup-content">
      <span class="popup-close" onclick="closePopup()">&times;</span>
      <video width="500%" height="500%" controls id="popupVideo"></video>
    </div>
  </div>





  <table class="movie-listings">
  <tr>
    <?php while ($row = mysqli_fetch_array($sql1)) { ?>
      <?php if ($row['movie_status'] == 'Coming Soon') { ?>
        <td class="movie">
          <div>
            <div>
              <p><?= $row["movie_name"]?></p>
              <button onclick="openVideoPopup('<?= $row['movie_trailer'] ?>')">Watch Trailer</button>
            </div>
            <img src="<?= $row["movie_image"] ?>" alt="Movie Image" width="180" height="250">
            <div>
              <h5>Movie Description</h5>
              <p><?= $row["movie_description"] ?></p>
            </div>
            <div>
              <h5>Movie Duration</h5>
              <p><?= $row["movie_duration"] ?></p>
            </div>
            <div>
              <h5>Release Date</h5>
              <p><?= $row["release_date"] ?></p>
            </div>
            <div>
              <h5>Movie Type</h5>
              <p><?= $row["movie_type"] ?></p>
            </div>
            <div>
              <h5>Movie Status</h5>
              <p><?= $row["movie_status"] ?></p>
            </div>
          </div>
        </td>
      <?php } ?>
    <?php } ?>
  </tr>
</table>

  <div class="section">
    <h2>Content preferences</h2>
    <div class="movie">
      <img src="coming_soon_movie1.jpg" alt="Coming Soon Movie 1">
      <h3>Movie Title 3</h3>
      <p>Description of Coming Soon Movie 3.</p>
      <button>Trailer</button>
    </div>
    <!-- Add more "Coming Soon" movies as needed -->
  </div>
  </div>

  <footer>
    <div class="footer-content">
      <div class="footer-logo">
        <li><a href="#">SRK Cinema</a></li>
      </div>
      <div class="footer-links">
        <ul>
          <li><a href="Index.php">Home</a></li>
          <li><a href="About_Us.php">About Us</a></li>
          <li><a href="Contact_Us.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </footer>

</body>

</html>

<style>
  footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
  }

  .footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .footer-logo img {
    max-width: 200px;
    height: 100px;
  }

  .footer-links ul {
    list-style: none;
    padding: 0;
  }

  .footer-links li {
    display: inline;
    margin-right: 20px;
  }

  .footer-links a {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s;
  }

  .footer-links a:hover {
    color: #ff9900;
  }

  .line-bar-menu {
    display: flex;
    justify-content: space-between;
    background-color: #333;
    /* 背景颜色 */
    color: #fff;
    /* 文字颜色 */
    padding: 10px;
  }

  .menu-item {
    width: 200px;
    /* 设置相同的宽度 */
    height: 100px;
    /* 设置相同的高度 */
    padding: 10px 20px;
    padding: 10px 20px;
    /* 调整内边距以适应样式 */
    cursor: pointer;
    /* 鼠标指针样式 */
    transition: background-color 0.3s;
    /* 添加过渡效果 */
  }

  .menu-item.active {
    background-color: #f00;
    /* 活动选项的背景颜色 */
    color: #fff;
    /* 活动选项的文字颜色 */
  }

  .left.carousel-control {
    left: -150px;
    /* 调整右边距以控制箭头位置 */
  }

  .right.carousel-control {
    right: -150px;
    /* 调整右边距以控制箭头位置 */
  }
</style>
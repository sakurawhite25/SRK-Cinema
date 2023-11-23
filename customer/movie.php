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

  <title>Customer Interface</title>
</head>
<div>
  <?php include('header/header.html'); ?>
</div>

<body>

  <table class="movie-listings">
    <tr>
        <td>
            <h2 style="color: white;">Now Showing</h2>
        </td>
    </tr>
    <tr>
        <?php while ($row = mysqli_fetch_array($sql1)) { ?>
            <?php if ($row["movie_status"] == "Now Showing") { ?>
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
            <?php } ?>
        <?php } ?>
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
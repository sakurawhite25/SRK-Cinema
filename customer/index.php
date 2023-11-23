<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Movies Website</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

  <header>
    <a href="#" class="logo">
    <i class='bx bxs-movie'></i> Movies
    </a>
    <div class="bx bx-menu" id="menu-icon"></div>


    <ul class="navbar">
      <li><a href="#home" class="home-active">Home</a></li>
      <li><a href="#movies">Movies</a></li>
      <li><a href="#coming">Coming</a></li>
      <li><a href="#newsletter">Newsletteer</a></li>
    </ul>
    <a href="#" class="btn">Sign In</a>
  </header>

  <section class="home swiper" id="home">
  <div class="swiper-wrapper">
      <div class="swiper-slide conatiner">
        <img src="../Mov_images/home1.jpg" alt="">
        <div class="home-text">
          <span>Marvel Universe</span>
          <h1>Venom: Let There <br> Be Carnage</h1>
          <a href="#" class="btn">Book Now</a>
          <a href="#" class="play">
          <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <div class="swiper-slide conatiner">
        <img src="../Mov_images/home2.jpg" alt="">
        <div class="home-text">
          <span>Marvel Universe</span>
          <h1>Avengers: <br> Infinity War</h1>
          <a href="#" class="btn">Book Now</a>
          <a href="#" class="play">
          <i class='bx bx-play'></i>
          </a>
        </div>
      </div>

      <div class="swiper-slide conatiner">
        <img src="../Mov_images/home3.jpg" alt="">
        <div class="home-text">
          <span>Marvel Universe</span>
          <h1>Spider-Man: <br> Far from Home</h1>
          <a href="#" class="btn">Book Now</a>
          <a href="#" class="play">
          <i class='bx bx-play'></i>
          </a>
        </div>
      </div>


    </div>
    <div class="swiper-pagination"></div>
  </section>

  <section class="movies" id="movies">
    <h2 class="heading">Opening This Week</h2>

    <div class="movies-container">
      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m1.jpg" alt="">
      </div>
      <h3>Venom</h3>
      <span>120 min | Action</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m2.jpg" alt="">
      </div>
      <h3>Dunkirk</h3>
      <span>120 min | Adventure</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m3.jpg" alt="">
      </div>
      <h3>Batman VS Superman</h3>
      <span>120 min | Thriller</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m4.jpg" alt="">
      </div>
      <h3>John Wick 2</h3>
      <span>120 min | Adventure</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m5.jpg" alt="">
      </div>
      <h3>Aquaman</h3>
      <span>120 min | Action</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m6.jpg" alt="">
      </div>
      <h3>Black Panther</h3>
      <span>120 min | Thriller</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m7.jpg" alt="">
      </div>
      <h3>Thor</h3>
      <span>120 min | Action</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m8.png" alt="">
      </div>
      <h3>Bumblebee</h3>
      <span>120 min | Thriller</span>
      </div>

      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m9.jpg" alt="">
      </div>
      <h3>Mortal Engines</h3>
      <span>120 min | Action</span>
      </div>
      
      <div class="box">
      <div class="box-img">
        <img src="../Mov_images/m10.jpg" alt="">
      </div>
      <h3>Underworld Blood Wars</h3>
      <span>120 min | Action</span>
      </div>
    </div>
  </section>

  <section class="coming" id="coming">
    <h2 class="heading">Coming Soon</h2>

    <div class="coming-container swiper">
      <div class="swiper-wrapper">

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming1.jpg" alt="">
      </div>
      <h3>Jhony English</h3>
      <span>120 min | Action</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming2.jpg" alt="">
      </div>
      <h3>Warcarft</h3>
      <span>120 min | Adventure</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming3.jpg" alt="">
      </div>
      <h3>Rampage</h3>
      <span>120 min | Thriller</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming4.jpg" alt="">
      </div>
      <h3>Iron Lady</h3>
      <span>120 min | Adventure</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming5.jpg" alt="">
      </div>
      <h3>Justice League</h3>
      <span>120 min | Action</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming6.jpeg" alt="">
      </div>
      <h3>Doctor Strange</h3>
      <span>120 min | Thriller</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming7.jpg" alt="">
      </div>
      <h3>Captain Marvel</h3>
      <span>120 min | Action</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming8.jpg" alt="">
      </div>
      <h3>Black Widow</h3>
      <span>120 min | Thriller</span>
      </div>

      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming9.jpg" alt="">
      </div>
      <h3>Ant-Man</h3>
      <span>120 min | Action</span>
      </div>
      
      <div class="swiper-slide box">
      <div class="box-img">
        <img src="../Mov_images/coming10.jpg" alt="">
      </div>
      <h3>Guardians of the Galaxy</h3>
      <span>120 min | Thriller</span>
      </div>
      </div>

    </div>
  </section>


  <section class="contact" id="contact">
    <h2>Contact Us <br>SRK Cinema</h2>
    <form action="index.php">
      <input type="email" class="email" placeholder="Enter Email......" required>
      <input type="submit" value="Subscribe" class="btn">
    </form>
  </section>

  <section class="footer">
  <a href="#" class="logo">
    <i class='bx bxs-movie'></i> Movies
    </a>
    <div class="social">
      <a href="#"><i class='bx bxl-facebook'></i></a>
      <a href="#"><i class='bx bxl-twitter'></i></a>
      <a href="#"><i class='bx bxl-instagram'></i></a>
      <a href="#"><i class='bx bxl-tiktok'></i></a>
    </div>
  </section>

  <div class="copyright">
    <p>&#169; SRK Technical Team All Right Reserved.</p>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script src="js/main.js"></script>

<script>
  let header = document.querySelector('header');
  let menu = document.querySelector('#menu-icon');
  let navbar = document.querySelector('navbar');

document.addEventListener('scroll', () => {
  header.classList.toggle('shadow', window.scrollY > 0);
});

menu.onclick = () => {
  menu.classList.toggle('bx-x');
  navbar.classList.toggle('active');
};

document.addEventListener('scroll', () => {
  menu.classList.remove('bx-x');
  navbar.classList.remove('active');
});
</script>

</body>
</html>
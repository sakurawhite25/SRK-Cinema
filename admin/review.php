<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">


  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/review.css">
</head>
<body>
  <div class="grid-container">


  <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>


    <aside id="sidebar">
    <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> SRK Cinema
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="index.php" target="_blank">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="movies.php" target="_blank">
            <span class="material-icons-outlined">movie</span> Movies
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="room.php" target="_blank">
            <span class="material-icons-outlined">living</span> Rooms
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="customer.php" target="_blank">
            <span class="material-icons-outlined">people</span> Customers
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="ticket.php" target="_blank">
            <span class="material-icons-outlined">book_online</span> Tickets
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="review.php" target="_blank">
            <span class="material-icons-outlined">reviews</span> Reviews
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="logout.php" target="_blank">
            <span class="material-icons-outlined">logout</span> LogOut
            </a>
          </li>
        </ul>
    </aside>


    <main class="main-container">
      <div class="hero">
        <h1>Customer Reviews</h1>
      <div class="review-box">
        <div id="slide">
            <div class="card01">
                <div class="profile">
                   <img src="images/sakura.jpg">
                   <div>
                   <h3>Sakura</h3>
                   <p>Movie A</p>
                   </div>
                </div>
                <p>"Short Term 12" is a raw and emotionally gripping film, delving into the lives of troubled teens and the counselors who guide them. With remarkable performances and genuine storytelling, it beautifully captures the complexities of human connection and healing within the confines of a foster care facility</p>
            </div>

            <div class="card01">
                <div class="profile">
                   <img src="images/user02.jpeg">
                   <div>
                   <h3>User02</h3>
                   <p>Movie B</p>
                   </div>
                </div>
                <p>"Whiplash" is an intense and riveting film that explores the brutal pursuit of greatness in the world of jazz drumming. Exceptional performances by Miles Teller and J.K. Simmons, coupled with a gripping narrative and breathtaking music, create a visceral and unforgettable cinematic experience.</p>
            </div>

            <div class="card01">
                <div class="profile">
                   <img src="images/user03.jpg">
                   <div>
                   <h3>User03</h3>
                   <p>Movie C</p>
                   </div>
                </div>
                <p>"Inception" is a mind-bending thriller that delves into the complexities of dreams and reality. Christopher Nolan's visionary direction, combined with a stellar cast led by Leonardo DiCaprio, creates a visually stunning and intellectually stimulating masterpiece that keeps audiences on the edge of their seats from start to finish.</p>
            </div>

            <div class="card01">
                <div class="profile">
                   <img src="images/user04.jpg!d">
                   <div>
                   <h3>User04</h3>
                   <p>Movie D</p>
                   </div>
                </div>
                <p>"Mad Max: Fury Road" is a high-octane action film set in a post-apocalyptic world. Directed by George Miller, the movie is a non-stop adrenaline rush with jaw-dropping stunts, a fierce performance by Charlize Theron, and breathtaking cinematography. It's a visual spectacle that redefines the action genre.</p>
            </div>


        </div>

        <div class="slidebar">
            <img src="images/up.png" id="upArrow">
            <img src="images/down.png" id="downArrow">
        </div>

      </div>

      </div>

    </main>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

  <script src="js/scripts.js"></script>

  <script>
    var slide = document.getElementById("slide");
    var upArrow = document.getElementById("upArrow");
    var downArrow = document.getElementById("downArrow");

    let x = 0;

    upArrow.onclick = function(){
        if(x > "-900"){
            x = x - 300;
            slide.style.top = x + "px";
        }
    }

    downArrow.onclick = function(){
        if(x < 0){
            x = x + 300;
            slide.style.top = x + "px";
        }
    }
  </script>

</body>
</html>
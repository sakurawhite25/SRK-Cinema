<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">


  <link rel="stylesheet" href="css/styles.css">
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
      <div class="main-title">
        <p class="font-weight-bold">DASHBOARD</p>
      </div>

      <div class="main-cards">


        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Movies</p>
            <span class="material-icons-outlined text-blue">movie</span>
          </div>
          <span class="text-primary font-weight-bold">249</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Rooms</p>
            <span class="material-icons-outlined text-orange">living</span>
          </div>
          <span class="text-primary font-weight-bold">83</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Customers</p>
            <span class="material-icons-outlined text-green">people</span>
          </div>
          <span class="text-primary font-weight-bold">79</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Reviews</p>
            <span class="material-icons-outlined text-red">reviews</span>
          </div>
          <span class="text-primary font-weight-bold">56</span>
        </div>

      </div>
      <div class="charts">
           
      <div class="charts-card">
        <p claas="chart-title">Top 10 Movies (November)</p>
        <div id="bar-chart"></div>
      </div>


      <div class="charts-card">
        <p claas="chart-title">Type of Customers</p>
        <div id="pie-chart"></div>
      </div>
      </div>

      </div>
    </main>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

  <script src="js/scripts.js"></script>
</body>
</html>
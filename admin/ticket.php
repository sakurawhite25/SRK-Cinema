<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="css/ticket.css">
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

      <div class="table">
        <div class="table_header">
          <p>Ticket Details</p>
          <div>
            <input placeholder="Ticket"/>
            <button class="add_new">+ Add New</button>
          </div>
        </div>
        <div class="table_section">
          <table>
            <thead>
              <tr>
                <th>S No.</th>
                <th>Ticket</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="images/"></td>
                <td>Ticket Movie A</td>
                <td>100</td>
                <td>Rm21.00</td>
                <td>
                  <button><i class="fa-solid fa-pen-to-square"></i></button>
                  <button><i class="fa-solid fa-trash-can"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      

      </div>
    </main>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>


  <script src="js/scripts.js"></script>
</body>
</html>
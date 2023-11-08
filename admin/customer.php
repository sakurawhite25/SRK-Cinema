<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="css/customer.css">

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
        <p class="font-weight-bold">CUSTOMERS</p>
      </div>

      <div class="main-cards">
	  <div class="cus-list">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>ContactNo</th>
                <th>Email</th>
                <th>Date</th>
                <th>Position</th>
				<th colspan="2" style="text-align: center;">Modifity</th>
            </tr>
        </thead>
		<tbody>
		<tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
				<td><span class="material-icons-outlined text-blue" onclick="location='edit_customer.php'">edit</span></td>
				<td><span class="material-icons-outlined text-red" onclick="location='delete_customer.php'">delete</span></td>
            </tr>
		</tbody>
		</table>
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
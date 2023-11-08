<?php 
include_once('include/db.php');

if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$Query="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
		$result=mysqli_query($conn,$Query);
		$rows=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);

		if($rows==1){
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$_SESSION["id"]=$row[0];
			echo "<script>window.location.href='index.php';
			alert('Successfully Login.');</script>";
		}else{
			echo "<script>alert('Wrong Username or Password!Please try again.');</script>";
		}
	}else{
		echo "<script>alert('Please Insert Username or Password!');</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
<body>
	<form action="login_admin.php" method="post">
		    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="submit">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

	</form>
</body>
</html>
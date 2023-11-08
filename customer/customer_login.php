<?php
include_once('include/db.php');

if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$Query="SELECT * FROM `customer` WHERE customer_username='$username'";
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


 if(isset($_POST['register'])) {
 	$customer_name = $_POST['customer_username'];
    $customer_email = $_POST['customer_email'];
    $customer_address = $_POST['customer_address'];
    $customer_password = $_POST['customer_password'];
    $hash = password_hash($customer_password, PASSWORD_DEFAULT);
    $customer_contactno = $_POST['customer_contactno'];
    $query = "INSERT INTO `customer`(customer_username,customer_email,customer_address,customer_password,customer_contactno,`status`) VALUES ('$customer_name','$customer_email','$customer_address','$hash','$customer_contactno','unactive')";
    if ($result = mysqli_query($conn,$query)) {
        echo "<script>window.location.href = 'customer_login.php';alert('Successfully Register')</script>";
    }else{
        echo "<script>window.location.href = 'customer_login.php';alert('Failed Register');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form action="customer_login.php" method="post">
		<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="customer_username" class="label">Username</label>
					<input id="customer_userame" type="text" class="input" name="username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="submit">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="customer_name" class="label">Username</label>
					<input id="customer_name" type="text" class="input" name="customer_username">
				</div>
                <div class="group">
					<label for="customer_email" class="label">Email</label>
					<input id="customer_email" type="email" class="input" name="customer_email">
				</div>
                <div class="group">
					<label for="customer_address" class="label">Address</label>
					<input id="customer_address" type="text" class="input" name="customer_address">
				</div>
                <div class="group">
					<label for="customer_contactno" class="label">Contact no</label>
					<input id="customer_contactno" type="text" class="input" name="customer_contactno">
				</div>
				<div class="group">
					<label for="customer_password" class="label">Password</label>
					<input id="customer_password" type="text" class="input" name="customer_password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up" name="register">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
	</form>
</body>
</html>
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
<html>
    <head>
        <title>1</title>
        <link rel="stylesheet" href="login_test.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="UserName" required>
                <input type="text" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box "><span>Remenber Password</span>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="email" class="input-field" placeholder="Email Id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box "><span>I agree to the terms condition</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
            </div>

        </div>

        <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }



        </script>

		<style>
			*{
    margin: 0%;
    padding: 0%;
    font-family: sans-serif;
}
.hero{
    height: 100%;
    width: 100%;
    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url();
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form-box{
    width: 380px;
    height: 480px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding: 5px;
    overflow: hidden;
}
.button-box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.toggle-btn{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height:100%;
    background: linear-gradient(to right, #ff105f,#ffad06);
    border-radius: 30px;
    transition: .5s;
}
.social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50;
}
.input-group{
    top: 180px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}
.submit-btn{
    width:85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #ff105f,#ffad06);
    border: 0;
    outline: none;
    border-radius: 30px;
}
.check-box{
    margin:30px 10px 30px 0;
}
span{
    color: #777;
    font-size: 12px;
    bottom: 69px;
    position: absolute;
}
#login{
    left: 50px;
}
#register{
    left: 450px;
}
		</style>
    </body>
</html>
<?php 
$server="localhost";
$user="root";
$password="";
$db="billing_db";
$conn=new mysqli($server,$user,$password,$db) or die("Couldnot connect to database");
if(isset($_POST['signup']))
{
	$name=$_POST['Fullname'];
	$email=$_POST['email'];
	$password=$_POST['psw'];
	$repassword=$_POST['psw-repeat'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];

	if($password!=$repassword)
	{
		echo "<script>alert('password didnot matched.Type the correct password');</script>";
	}
	if(empty($error)){
		$sql="INSERT INTO user VALUES('$name','$email','$password','$phone','$address')";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo "<script>alert('Successfully registered.');</script>";
		}
		else{
			echo "<script>alert('error');</script>";
		}
	}

 }
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="icon" href="logo.jpeg"/>
  <style type="text/css">
  a{
    text-decoration: none;}
    ul
{
  float: right;
  list-style-type: none;
  margin-top: 15px
}
ul li{
  display: inline;
}
ul li a{
  text-decoration: none;
  color:white;
  padding: 10px 10px;
  border: 10px solid transparent;
  transition:0.6s ease;
  width: 30px;
  height: 30px;
  font-size: 20px;
}
</style>
</head>  
<div>
  <ul>
  <li >
      <a  href="index.html">Home</a> <span style="color: white;">|</span>
      <a  href="Mybill.php">Login</a><span style="color: white;">|</span>
      <a  href="#">Sign up</a><span style="color: white;">|</span>
      <a  href="aboutus.html">About us</a>
      <span></span>
      <form class="search-form" style="margin-top:0px;float:right;">
      <input type="text" placeholder="search">
      <button>search</button>
      </form>
      </li>
      </ul>
      </div>  
  <body style="background-image:url(donje.jpg);background-color:black;position:fixed;background-position:center;height:100vh;width:100%;top:0;bottom:0">
  <form action="register.php" method="POST">
  <div class="container" style="width: 100%; padding: 0px;margin:20px;height:50%;position:absolute;top:05%;left:30%;color:black;font-size:20px;">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <label style="display:block;" for="Name"><b>Name</b></label>
    <input style="display:block; border-radius: 8px;" type="text" placeholder="Enter Full Name" name="Fullname" required>

    <label style="display:block;" for="email"><b>Email</b></label>
    <input style="display:block;border-radius: 8px;" type="text" placeholder="Enter Email" name="email" required="email" >

    <label style="display:block;" for="psw"><b>Password</b></label>
    <input style="display:block;border-radius: 8px;" type="password" placeholder="Enter Password" name="psw" required>

    <label style="display:block;" for="psw-repeat"><b>Repeat Password</b></label>
    <input style="display:block;border-radius: 8px;" type="password" placeholder="Confirm Password" name="psw-repeat" required>

    <label style="display:block;" for="Phone" ><b>Phone Number</b></label>
    <select style="border-radius: 8px;"><option value="1">+91</option>
    <option value="2">+977</option>
    <option value="3">+14</option></select>
    <input style="display:inline;border-radius: 8px;" type="Phone" placeholder="9741******" name="phone" required>

    <label style="display:block;" for="Address"><b>Address</b></label>
    <input style="display:inline;border-radius: 8px;" type="Address" placeholder="Enter full Address" name="address" >


    <label>
      <input style="display:inline-block;border-radius: 8px;" type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:red">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button style="border-radius: 8px;" type="button" class="cancelbtn"><a href="register.php">Cancel</a></button>
      <button style="border-radius: 8px;" type="submit" class="signupbtn" name="signup" >Sign Up</button>
    </div>
  </div>
  </div>
</form>
<h2 style="color:black; opacity: 80%;position:absolute;top: 75%;left:10%;right:10%;"><marquee>Electricity Authority Bangalore</marquee></h2>
</body>

<footer style="height:50px; width:100%; background-color:yellow;position:fixed; left:0px ;bottom:0px;text-align: center;
  color:green;
  font-size: 15px;
  font-weight: bold;
  padding: 13px 0px 0px 0px;">
         <p><font color="green">Copyright &copy <a href="http://www.eab.gov.in" > Electricity Authority Bangalore</a>|All Rights Reserved</font></p>
      </div>
    </footer>
</html>
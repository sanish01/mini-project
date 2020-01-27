
<?php
$server="localhost";
$user="root";
$password="";
$db="billing_db";
$conn=new mysqli($server,$user,$password,$db) or die("Couldnot connect to database");
if (isset($_POST['login']))
 {
  $name=$_POST['usrname'];
  $password=$_POST['psw'];
  $sql="SELECT * FROM `user` WHERE Fullname='$name' and psw='$password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
  header('location:mainpage.php');
  }
  else{
   echo "<script>alert('Login Failed. Incorrect password or username');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Bill</title>
  <link rel="icon" href="logo.jpeg"/>
  <style type="text/css">
    a{
      text-decoration: none;
    }
  </style>
</head>
<div class="main">
                <ul style="float:right" style="margin-top:15px;list-style-type:none;text-align:center;">
                  <li style="display:inline;background-color:none;padding:40px;border:20px solid transparent font-size:49px;width:0px;height:20px; position:auto;letter-spacing:5px;line-height:30px;font-family: century Gothic;">
            
              <a style="color: white;" href="index.html">Home</a><span style="color: white;">|</span> 
              <a style="color: white;" href="#">Login</a><span style="color: white;">|</span>
              <a style="color: white;" href="register.php">Sign up</a><span style="color: white;">|</span>
              <a style="color: white;" href="aboutus.html">About us</a>
              <form class="search-form" style="margin-top:0px;float:right;margin-right:50px;">
              <input type="text" placeholder="search">
              <button>search</button>
            </form>
        </li>
        </ul>
      </div>
<body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(donje.jpg);position:auto;background-position:center;height:90vh;width:100%;top:0;bottom:0;background-repeat:no-repeat;">
<form action="mybill.php" method="post"> 
<label>
  <div style="width:25%;height:50%;position:absolute;top:25%;left:40%;color:white;font-size:25px;margin-color:blue">
    <label style="display:block;color: white;"  for="usrname"><b>Username</b></label>
    <input style="display:block;border-radius: 8px;" type="name" placeholder="Enter username" name="usrname" required> <br>

    <label style="display:block;color:white;" for="psw"><b>Password</b></label>
    <input style="display:block;border-radius: 8px;" type="password" placeholder="Enter Password" name="psw" required><br>

    <button style="display:block;border-radius: 8px;" type="submit" name="login">Login</button>
      <input style="display:inline;border-radius: 8px;" type="checkbox" name="remember"> Remember me
      <button style="display:block;border-radius: 8px;" type="button" class="cancelbtn"><a href="index.html">Cancel</a></button>
    <span style="display:inline;border-radius: 8px;" class="psw"> <a href="#">Forget password ?</a></span>
    </label>
  </div>
</form>
<h1 style="color:yellow; opacity: 80%;position:absolute;top: 70%;left:10%;right:10%;"><marquee>Electricity Authority Bangalore</marquee></h1>
</body>
<footer style="height:50px; width:100%; background-color:yellow;position:fixed; left:0px ;bottom:0px;text-align: center;
  color:green;
  font-size: 15px;
  font-weight: bold;
  padding: 13px;">
         <p>Copyright © <a href="http://www.eab.gov.in" > Electricity Authority Bangalore</a>|All Rights Reserved</font></p>
      </div>
    </footer>
</html>
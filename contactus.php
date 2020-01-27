<?php
$server="localhost";
$user="root";
$password="";
$db="billing_db";
$conn=new mysqli($server,$user,$password,$db) or die("Couldnot connect to database");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$number=$_POST['number'];
	$message=$_POST['message'];
		$sql="INSERT INTO contact_us VALUES ('$email','$number','$message')";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo "<script>alert('your message has been submitted');</script>";
	}
	else
	{
		echo "<script>alert('your message has not been submited');</script>";
	}
} 
?>
</!DOCTYPE html>
<html>
<head>
	<title>Contact_us</title>
	<link rel="icon" href="logo.jpeg"/>
</head>
<?php include('headerfile.php') ?>
<body style="background-image:linear-gradient(rgba(0.2,0.3,0.4,0.5),rgba(0,0,0,0.5)),url(contact1.jpg);position:auto;background-position:center;
	height:auto;width:auto;top:0;bottom:0;
	background-repeat:no-repeat;">
	<h1 style="font-size:30px;letter-spacing:3px; color:yellow; position:absolute;top:5%;right:50%;"><b>CONTACT US</b></h1>
	<p style="font-size: 20px;letter-spacing: 2px; color:lightgreen;position: absolute;top:12%;right: 35%;"><marquee><strong>Have a question? Feel free to drop us a line below..</strong></marquee></p>
	<form action="contactus.php" method="POST">
		<div class="container" style="width:25%; padding: 10px;margin:5px;
	letter-spacing:3px; height:50%;position:absolute;top:20%;left:35%;color:white;font-size:25px;margin-color:blue">
			<label style="display: block;color: yellow;" for="email"><b>Email</b></label>
			<input style="border-radius: 8px;" type="text"  name="email" required>

			<label style="display: block;color: yellow;" for="number"><b>Number</b></label>
			<input style="border-radius: 8px;" type="phone" placeholder="Phone no. " name="number" maxlength="10" required>
			<label style="display:block; color: yellow;" for="message"><b>Message</b></label>
			<textarea style="border-radius: 8px;" name="message" rows="6" cols="50"  style="display:inline;" placeholder="Enter your message or feedback here... "></textarea>
			<br><br>
			<button style="border-radius: 8px;" type="submit" name="submit" style="display: block;">submit</button>
		</div>
	</form>
<h1 style="color:yellow; opacity: 80%;position:absolute;top: 70%;left:10%;right:10%;"><marquee>Electricity Authority Bangalore</marquee></h1>
</body>
<footer style="height:50px; width:100%; background-color:yellow;position:fixed; left:0px ;bottom:0px;text-align: center;
  color:green;
  font-size: 15px;
  font-weight: bold;
  padding: 13px 0px 0px 0px;">
         <p><font color="green">Copyright © <a href="https://bescom.org/" > Electricity Authority Bangalore</a>|All Rights Reserved</font></p>
      </div>
    </footer>
</html>
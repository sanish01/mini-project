<?php

$server="localhost";
$user="root";
$password="";
$db="billing_db";
$conn=new mysqli($server,$user,$password,$db) or die("Couldnot connect to database");
if(isset($_POST['submit'])) 
{
	$customer_name=$_POST['customer_name'];
	$bill_no=$_POST['bill_no'];
	$month=$_POST['month'];
	$current_reading=$_POST['current_reading'];
	$previous_reading=$_POST['previous_reading'];
	$total_reading=$_POST['total_reading'];
	$charge_per_unit=$_POST['charge_per_unit'];
	$final_amount=$_POST['final_amount'];
	$card_no=$_POST['card_no'];
	$name_c=$_POST['name_c'];
	$card_type=$_POST['card_type'];
	$valid_f=$_POST['valid_f'];
	$valid_u=$_POST['valid_u'];
	$cvv=$_POST['cvv'];
	
	
$sql="INSERT INTO mybill VALUES ('$customer_name','$bill_no','$month','$current_reading','$previous_reading','$total_reading','$charge_per_unit','$final_amount','$card_no','$name_c','$card_type','$valid_f','$valid_u','$cvv')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "<script>alert('your payment has been successfull...');</script>";
}
else
{
	echo "<script>alert('error');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MyBill</title>
	<link rel="icon" href="logo.jpeg"/>
	
</head>
<?php include('headerfile.php'); ?>
<body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(donje.jpg);position:auto;background-position:center;height:98vh;width:auto;top:0;bottom:0;background-repeat:no-repeat; background-size: cover;">
	<h1 style="font-size:30px; color:yellow; position:absolute;top:5%;left:44.5%;"><b><strong>MY BILL</strong></b></h1>
<form action="mainpage.php" method="post">
	<div class="container" style="width:25%; padding: 0px;margin:0px;height:50%;position:absolute;top:15%;left:20%;color:white;font-size:25px;margin-color:blue">
	<label style="display:block;color: yellow;" for="user"><b>Name</b></label>
	<input style="display: inline;border-radius:8px;" type="text" name="customer_name"  placeholder=" Name" required>

	<label style="display: block;color: yellow;" for="bill.no"><b>Bill_no</b></label>
	<input style="display: inline;border-radius:8px;" type="number" name="bill_no" placeholder=" Bill no" required>

	<label style="display:block;color: yellow;" for="month"><b>Month</b></label>
	<input style="display: inline;border-radius:8px;" type="date" name="month">

	<label style="display: block;color: yellow;" for="current.read"><b>Current_reading</b></label>
	<input style="display: inline;border-radius:8px;" type="no." id="current" placeholder=" In units" name="current_reading" maxlength="5" required>

	<label style="display: block;color: yellow;" for="previous.read"><b>Previous_reading</b></label>
	<input style="display: inline;border-radius:8px;" type="no." id="previous" placeholder=" In units" name="previous_reading" onchange="calc();" maxlength="5" required>

	<label style="display: block;color: yellow;" for="total.unit"><b>Total_reading</b></label>
	<input style="display: inline;border-radius:8px;" type="no." id="total" name="total_reading" placeholder=" In units" readonly>

	<label style="display: block;color: yellow;" for="c.p.u"><b>Charge_per_unit</b></label>	
	<input style="display: inline;border-radius:8px;" type="number" id="charge" placeholder=" In Rs." name="charge_per_unit" value="12" readonly>
	</div>

	<div class="container" style="width:25%; padding: 0px;margin:0px;height:50%;position:absolute;top:15%;right:10%;color:white;font-size:25px;margin-color:blue">
		<label style="display:block;color: yellow;" for="card_no"><b>Card_no</b></label>
		<input style="display:block;border-radius: 8px;" type="no." name="card_no" placeholder="ATM card_no" minlength="16" maxlength="16" required></br>

		<label style="display: block;color: yellow;" for="name"><b>Name on card</b></label>
		<input style="display:block;border-radius: 8px;" type="text" name="name_c" placeholder="Name on card" required></br>

		<label style="display:block;color: yellow;" for="cardtype"><b>Card Type</b></label>
		<input style="display:block;border-radius: 8px;" type="text" placeholder="credit or debit" name="card_type" maxlength="6" required></br>

		<label style="display:block;color: yellow;" for="exp.date"><b>Card validity</b></label>
		<input  style="display:inline;border-radius: 8px;" type="date" name="valid_f" placeholder="valid from" required>
		<input style="display:inline;border-radius: 8px;" type="date" name="valid_u" placeholder="valid until" required></br></br>
	</div>
	<div style="width: 25%;padding: 0px;margin:0px;height:50%;position:absolute;top:62%;right:10%;color:white;font-size:25px;">
		<label style="display: block;color: yellow;" for="cvv number"><b>Cvv Number</b></label>
		<input style="display:block;border-radius: 8px;" type="no." placeholder="eg:123" name="cvv" minlength="3" maxlength="4" required>	
		</div>

	<div class="container" style="width:25%; padding: 0px;margin:0px;height:50%;position:absolute;top:62%;left:43%;color:white;font-size:25px;margin-color:blue"> 
	<label style="display: block;color: yellow;" for="final.amt"><b>Final_amount</b></label>
	<input style="display: inline;border-radius:8px;" type="no." id="final" placeholder=" In Rs." name="final_amount" readonly>
	</div>
	
	<div class="container" style="width:25%; padding: 10px;margin:10px;height:50%;position:absolute;top:72%;left:44.5%;color:white;"> 
	<button style="display: inline;border-radius:8px; font-size: 25px; color: red;" type="submit" class="submitbtn" name="submit">PAY</button>

	</div>
</form>
<div class="pasa" style="text-align:center;">
	<img src="22.jpeg" style="margin-top:10%;margin-left:-5%; opacity: 60%;" width="25%">

	</div>
<h1 style="color:yellow; opacity: 60%;position:absolute;top: 85%;left:10%;right:10%;font-size: 20px;"><marquee>Electricity Authority Bangalore</marquee></h1>
</body>
<footer style="height:50px; width:100%; background-color:yellow;position:fixed; left:0px ;bottom:0px;text-align: center;
  color:green;
  font-size: 15px;
  font-weight: bold;
  padding: 13px 0px 0px 0px;">
         <p><font color="green">Copyright © <a href="https://bescom.org/" > Electricity Authority Bangalore</a>|All Rights Reserved</font></p>
      </div>
    </footer>
    <script type="text/javascript">		
	function calc(){
		var current=parseInt(document.getElementById('current').value);
		var previous=parseInt(document.getElementById('previous').value);
		var charge=parseInt(document.getElementById('charge').value);
		var total=current-previous;
		var price=total*charge
		document.getElementById("total").value=total;
		document.getElementById("final").value=price;
	}
	</script>
</html>
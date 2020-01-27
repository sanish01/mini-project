
<!DOCTYPE html>
<html>
<head>
	<title>View Bill Details</title>
	<style type="text/css">
		body{
			background-color: #A9A9A9;
			background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url("wall1.png");
		}
		
		.details{
			width:100%;
}
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 6px;
    text-decoration-color: white;
}
th {
    text-align: center;
}

	</style>
</head>
<body>
	<div>
		<?php include('headerfile.php'); ?>
	</div>
	<hr>


<h2 style="text-align: center; color: black">My Bill</h2>
<div class="details">
	
	<center><table style="width: 60%">
		
		<tr>
			<th>Customer Name</th>
			<th>Bill_no</th>
			<th>Date</th>
			<th>Total Reading</th>
			<th>charge per unit</th>
			<th>Amount paid</th>
		</tr>
		
			<?php 
			
			
				require('mysql.php');
				$sql="SELECT * FROM mybill";
				$result=$conn->query($sql);
				if($result->num_rows > 0)
				{
					while($rows=$result->fetch_assoc()){
						echo "<tr>";
						echo "<td>".$rows["customer_name"]."</td>";
						echo "<td>".$rows["bill_no"]."</td>";
						echo "<td>".$rows["month"]."</td>";
						echo "<td>".$rows["total_reading"]."</td>";
						echo "<td>".$rows["charge_per_unit"]."</td>";
						echo "<td>".$rows["final_amount"]."</td>";

					}
				}
			?>
		
	</table>
</center>
</div>
<h1 style="color:yellow; opacity: 60%;position:absolute;top: 85%;left:10%;right:10%;font-size: 20px;"><marquee>Electricity Authority Bangalore</marquee></h1>
</body>
</html>
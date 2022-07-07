<!DOCTYPE html>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<?php

session_start();

if(!isset($_SESSION['Email']))
{

echo "<h2>Please Login first...........</h2>";

}
else
{

include 'Connection.php';



echo "<h1 class = 'f'> My order </h1> <hr>";

echo "<table cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<td> <strong>Order Id  <td> <strong> Payment Method <td> <strong> Name of Credit Card <td><strong> Name on Credit Card <td><strong>Credit Card No<td> <strong> <strong>Shipping Address </td><td><strong> Order Ammount  <td><strong> Email id <td><strong> Action </td> <tr align = center>";		

if(isset($_SESSION['Email']))
{
	$eid = $_SESSION['Email'];
	

$result = mysqli_query($db,"select * from orders where Email_id = '$eid'") or die("Error in Selecting Data from Orders");
	
while($row = mysqli_fetch_row($result))
{
	
	echo "<td>".$row[0];
	echo "<td>".$row[11];
	echo "<td>".$row[12];
	echo "<td>".$row[13];
	echo "<td>".$row[14];
	echo "<td>".$row[9];
	echo "<td>".$row[17];
	echo "<td>".$row[20];
	echo "<td> <a href = 'viewcart.php?id=$row[0]&em=$row[20]'>View </a>";
	echo "<tr align = center>";
}
	
echo "</tr></table>";

}
}
?>
</body>
</html>
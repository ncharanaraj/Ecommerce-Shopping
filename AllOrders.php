<!DOCTYPE html>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['Admin']))
{

echo "<h2>Please Login First............</h2>";

}

else
{
include 'Connection.php';

echo "<h1 class = 'f'> All Orders  </h1> <hr>";

echo "<table cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<td> <strong>Order Id  <td> <strong> Payment Method <td> <strong> Name of Credit Card <td><strong> Name on Credit Card <td><strong>Credit Card No<td> <strong> <strong>Shipping Address </td><td><strong> Order Ammount  <td><strong> Order Time <td><strong> Email id <td><strong> Action </td> <td><strong> Action </td><tr align = center>";		

$result = mysqli_query($db,"select * from orders") or die("Error in Selecting Data from Orders");
	
while($row = mysqli_fetch_row($result))
{
	
	echo "<td>".$row[0];
	echo "<td>".$row[11];
	echo "<td>".$row[12];
	echo "<td>".$row[13];
	echo "<td>".$row[14];
	echo "<td>".$row[9];
	echo "<td align = center>".$row[17];
	echo "<td>".$row[19];
	echo "<td>".$row[20];
	echo "<td> <a href = 'viewcart.php?id=$row[0]&em=$row[20]'>View </a>";
	echo "<td> <a href = 'DeleteOrder.php?id=$row[0]'>Delete </a>";
	echo "<tr align = center>";
}
	
echo "</tr></table>";
}

?>

</body>
</html>
<!DOCTYPE html>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<?php

include 'Connection.php';

if(isset($_GET['id']))
{
	
$oid = $_GET['id'];
$emid = $_GET['em'];	

}

$r = mysqli_query($db,"select * from cart1 where Order_id = '$oid' and email = '$emid'") or die("Error in selecting data from database");


echo "<h1 class = 'f'> Order Items <hr></h1>";
echo "<table  width = 1000 cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<td> <strong>Cart Id  <td> <strong> Image <td> <strong> Description <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td> <tr>"; 

while($rows = mysqli_fetch_row($r))
{
	
	echo "<td align = 'center'> ".$rows[0];
	echo "<td align = 'center'><img src = '".$rows[6]."' height = 120 width = 120>";
	echo "<td> ".$rows[5];
	echo "<td align = 'center'> ".$rows[7];
	echo "<td align = 'center'> ".$rows[8];	
	echo "<td align = 'center'>".$rows[9];
	echo "<tr>";
}

echo "</tr></table>";
?>

</body>
</html>
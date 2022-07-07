<! DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<link rel = "stylesheet" type = "text/css" href = "menu.css">

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


$r = mysqli_query($db,"select * from signuptable") or die("Error in selecting data from database");


echo "<h1 class = 'f'> All Users <hr></h1>";
echo "<table  width = 1100 cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<td> <strong>User id<td> <strong>First Name<td> <strong>Last Name<td><strong>Gender<td><strong>Contact No<td> <strong> <strong>Email Id<td> <strong> <strong>Password<td> <strong> <strong>Joining Date And Time<td> <strong> <strong>Action</td> <tr>";
 

 while($rows = mysqli_fetch_row($r))
 {
	 
	echo "<td align = 'center'> ".$rows[0];
	echo "<td align = 'center'> ".$rows[1];
	echo "<td align = 'center'> ".$rows[2];
	echo "<td align = 'center'> ".$rows[3];
	echo "<td align = 'center'> ".$rows[4];	
	echo "<td align = 'center'> ".$rows[5];
	echo "<td align = 'center'> ".md5($rows[6]);
	echo "<td align = 'center'> ".$rows[7];
	echo "<td align = 'center'> <a href = 'deleteUsers.php?id=$rows[0]&e=$rows[5]'>Delete</a></td>";
	echo"<tr>";
	
 }
 
 echo "</tr></table>";

}
?>


</body>
</html>
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

echo "<h1 class = 'f'> Feedback  </h1> <hr>";

echo "<table cellspacing = 5 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<td> <strong> Id  <td> <strong> User Name <td> <strong> Email <td><strong> Subject <td><strong>Message</td> <tr align = center>";		

$result = mysqli_query($db,"select * from contactus") or die("Error in Selecting Data from Contactus Table");
	
while($row = mysqli_fetch_row($db,$result))
{
	
	echo "<td>".$row[0];
	echo "<td>".$row[1];
	echo "<td>".$row[2];
	echo "<td>".$row[3];
	echo "<td>".$row[4];
	echo "<tr align = center>";
}
	
echo "</tr></table>";
}

?>

</body>
</html>
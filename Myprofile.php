<!DOCTYPE html>
<head>
<title>My Profile</title>
<link href="menu.css" rel="stylesheet" type="text/css"/>
<link href="mystyle.css" rel="stylesheet" type="text/css"/>
<script src="validation3.js"></script>
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

$e = $_SESSION['Email'];

include 'Connection.php';

$result = mysqli_query($db,"SELECT * from signuptable where EmailId = '$e' ");

$row = mysqli_fetch_row($result);

?>

<div style = "height: 1000px; width: 1000px;">
<br>

<h1 align = center class = "f">My Profile </h1>
<hr>
<form name = "myprofile" method = "post" action = "updateProfile.php" onsubmit = "return validation3()">

<table width="400" style="font-family:Futura Lt BT; font-weight:400;" cellspacing="8" cellpadding="10" align = "center">
  <tr>

    <td> First Name  </td>
    <td><input type="text" name = "f" value = "<?php echo $row[1] ?>" name="fname" class="in3" placeholder = "First name"  size="20" onblur = "alpha2()"/></td>
  </tr>
  <tr>
    <td> Last Name</td>
    <td><input type="text" name = "l" value = "<?php echo $row[2] ?>" name="lname" class = "in3" placeholder = "Last name"size="20" onblur = "alphabetic2()" /></td>
  </tr>
    <tr>
    <td> Gender </td>
    <td> <input type="text" name="g" value = "<?php echo $row[3] ?>" class = "in3" placeholder="Gender" readonly/></td>
  </tr>

  <tr> 
    <td>Contact no</td>
    <td><input type="text"  name = "c" value = "<?php echo $row[4] ?>" name="contact" class = "in3" size="20" maxlength = 10 placeholder = "Contact no" onblur = "num2()"/></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name = "submit" class = "Addtocart" value = "Save changes"/> </td>
  

</tr>
</table>
</form>
</div>
<?php
}


?>

</body> 
</html>
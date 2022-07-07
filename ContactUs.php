<!DOCTYPE html>
<head>
<title>Contact Us</title>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>

<h1 class = "f">Contact Us</h1>
<hr>

<h2 class = "f">send us Message Now</h2>
<form name="ContactUs" method="post" action="<?php $_PHP_SELF ?>">

<table width="400" style="font-family:Futura Lt BT;" cellspacing="8" cellpadding="3" >

<td> Name <br><input type="text" name="name" class = "in50" size="30" required></tr>

<tr>
<td> Email <br><input type="email" name="email"  class = "in50" size="30" required></tr>

<tr>
<td> Subject <br><input type="text" name="subject" size="30" class = "in50" required></tr>

<tr>
<td> Message <br><textarea name="message" cols = 40 rows =10 class = "in51" required> </textarea></td>
</tr>

<tr>
<td align="left"><input type="Submit" name="Send" value="Send" class="button">&nbsp; <input type="reset" name="Reset" value="Clear" class="button"></td>
</tr>
</table>
</form>
</body>
</html>

<?php


include 'Connection.php';


if(isset ($_POST['Send']))
{
$n = $_POST['name'];

 $eid = $_POST['email'];

 $s = $_POST['subject'];

 $m = $_POST['message'];


$query2 = "INSERT INTO contactus(name, email, subject, message) VALUES('".$n."', '".$eid."', '".$s."', '".$m."')";

mysqli_query($db,$query2) or die("Failed to load data in database");


mysqli_close($db);
}
?>

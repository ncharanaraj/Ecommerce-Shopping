<?php
session_start();

include 'Connection.php';

$fn = $_POST['fname'];

$ln = $_POST['lname'];

$gen = $_POST['g'];

$cno = $_POST['contact'];

$eid = $_POST['email'];

$pass = $_POST['c_password'];

$pass2 = $_POST['password'];

if($pass === $pass2)
{
	
$query = "INSERT INTO signuptable(FirstName, LastName, Gender, ContactNo, EmailId, password) VALUES('".$fn."', '".$ln."', '".$gen."', '".$cno."', '".$eid."', '".$pass."')";

mysqli_query($db,$query) or die("<h2 style = 'color:red;'> This Email id Already Has been Registered........</h2>");

header("location:index.php?");

}
else
{
echo "<h2 style = 'color:red;'> Sorry Your Password Not Match, Please Try again.</h2>";	
}


mysqli_close($db);

?>

<?php

session_start();

include "Connection.php";

if(isset($_SESSION['Email']))
{
	$e = $_SESSION['Email'];
}
else
{
	echo "Please Login first...........!!!!";
}


$p = $_POST['npassword'];

$c_p = $_POST['c_password'];


if($p != $c_p)
{
	echo "<h2 style = 'color:red;'> Password Not Match.......</h2>";
}
else
{

$query =("update signuptable set Password = '$c_p' where Emailid = '$e'");

$v = mysqli_query($db,$query);

if($v)
{

echo"<h1>Your Password has been Successfully Change....</h1>";
}
else
{
echo "<h1>Failed To Update Password.....</h1>";

}

}
mysqli_close($db);
?>
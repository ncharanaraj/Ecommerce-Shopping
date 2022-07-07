<?php

session_start();

require 'Connection.php';

if(isset($_POST['Email_id']))
{

$eid = $_POST['Email_id'];

$pass = $_POST['password'];

$query = "SELECT * FROM signuptable where EmailId = '$eid' and Password = '$pass'";

$query2 = "SELECT * FROM Administrator where Email_id = '$eid' and Password = '$pass'";

$result = mysqli_query($db,$query) or die("Error in query");

$result3 = mysqli_query($db,$query2) or die("Error in query");

$row = mysqli_num_rows($result);

$row2 = mysqli_num_rows($result3);

$result2 = mysqli_query("SELECT FirstName from signuptable where EmailId = '$eid'");

$r = mysqli_fetch_row($result2);

if($row == 1)
{

$_SESSION['Email'] = $eid;

$_SESSION['name'] = $r[0];


header("location:index.php");

}
elseif($row2 == 1)
{

$_SESSION['Admin'] = $eid;

header("location:hompage2.php?");
}

else
{
header("location:index.php?");
}

}

mysqli_close($db);
?>
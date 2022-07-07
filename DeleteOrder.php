<?php
include 'Connection.php';

if(isset($_GET['id']))
{
	
$i = $_GET['id'];

$q = "delete from orders where Order_id = '$i'";

$c = mysqli_query($db,$q);

if(!$c)
{
	
	echo "<h1> Failed to delete Order........</h1> ";
}
else
{
	header("location:AllOrders.php");
}

}

mysqli_close($db);

?>

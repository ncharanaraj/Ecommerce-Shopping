<?php

include 'Connection.php';

$c = $_POST['category'];

$p = $_POST['pid'];

$d = $_POST['Desc'];

$pri = $_POST['price'];

	if($c == 'men')
	{
		$query = "SELECT Imagepath from men where Product_id = '$p'";
		$r = mysqli_query($db,$query);
		$r2 = mysqli_fetch_array($r);		
		$string =  $r2['Imagepath'];
		$newstring = str_replace('/project/','',$string);	
		$query = "DELETE from men where Product_id = '$p'";

		$l = mysqli_query($db,$query);
		if($l)
		{
			echo "<h2> Successfully Deleted.........";
			unlink($newstring);	
		}
		else
		{
			echo "<h2> Failed to delete...............";			
		}
	}
	else
	{

		$query = "SELECT Imagepath from woman where Product_id = '$p'";
		$r = mysqli_query($db,$query);
		$r2 = mysqli_fetch_array($r);		
		$string =  $r2['Imagepath'];
		$newstring = str_replace('/project/','',$string);	
		$query = "DELETE from woman where Product_id = '$p'";

		$l2 = mysqli_query($db,$query);	

		if($l2)
		{
			echo "<h2> Successfully Deleted.........";
			unlink($newstring);	
		}
		else
		{
			echo "<h2> Failed to delete...............";			
		}

}


mysqli_close($db);
?>
<html>
<head>
<title>Untitled Document</title>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<?php
  
session_start();

include 'Connection.php';


$odt = date("dmyH:i:s A");

if(isset($_SESSION['Email']))
{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

$em = $_SESSION['Email'];

}

if(isset($_POST['submit']))
{

$fn = $_POST['sfname'];

$ln = $_POST['slname'];

$e =  $_POST['semail'];

$add = $_POST['Address'];

$cont = $_POST['select'];

$s = $_POST['select2'];

$city = $_POST['select3'];

$z = $_POST['zcode'];

$cn = $_POST['stel2'];

$sm = $_POST['shipcharge'];

$pm = $_POST['payment'];

$ct = $_POST['Ctypes']; 

$nc = $_POST['Nc'];

$ccno = $_POST['CCno'];

$cv = $_POST['cvv'];

$m = $_POST['mon'];

$y = $_POST['yer'];

$exd = $m."/".$y;

if($sm == 'Standard Shiping')
{
	
	$charge = 8.50;
}
else
{
	$charge = 0;
	
}
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;
	
}



$tp2 = $tp2 + $charge;
	
if($pm == 'Credit Card')
{
$r = mysqli_query($db,"INSERT INTO orders(FirstName, LastName, Email, ShippingAddress, Country, State, City, Zip_code, contactNo, ShippingMethod, PaymentMethod, TypeOfCreditcard, NameOnCC, CCNo, CVV, ExpirationDate, Email_id, Order_Ammount, temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$cont."', '".$s."', '".$city."', '".$z."', '".$cn."', '".$sm."', '".$pm."', '".$ct."', '".$nc."', '".$ccno."', '".$cv."', '".$exd."', '".$em."', '".$tp2."', '".$odt."')") or die("Failed to Insert Data");
}
else
{

$r = mysqli_query($db,"INSERT INTO orders(FirstName, LastName, Email, ShippingAddress, Country, State, City, Zip_code, contactNo, ShippingMethod, PaymentMethod, Email_id, Order_Ammount, temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$cont."', '".$s."', '".$city."', '".$z."', '".$cn."', '".$sm."', '".$pm."', '".$em."', '".$tp2."', '".$odt."')") or die("Failed to Insert Data");

}

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;

	$que = "insert into cart1(Product_id, productname, brand, description, Imagepath , price, quantity, Total_price, email, temp) values('".$item['Proid']."', '".$item['name']."', '".$item['brand']."', '".$item['desc']."', '".$item['image']."', '".$item['price']."', '".$item['quan']."', '".$tp."', '".$em."', '".$odt."')";
	
	mysqli_query($db,$que) or die("Failed ");
	
}


$r2 = mysqli_query($db,"SELECT Order_id from orders WHERE temp = '$odt'");



	while($row = mysqli_fetch_row($r2))
	{
		$oid = $row[0];		
	}
	
mysqli_query($db,"update cart1 set Order_id = '$oid' where temp = '$odt'");

mysqli_query($db,"update cart1 set temp = '' where Order_id = '$oid'");

mysqli_query($db,"update orders set temp = '' where Order_id = '$oid'");

if($r2)
{
	echo "<hr>";
	
	echo "<h1 align = center class = 'f'> Thank you for Shopping </h1> <br><br> <h4> Your Order id is : ".$oid. "</h4>";
	
	unset($_SESSION["cart"]);
	
}

else
{
	echo "<h2>Somthig is Wrong... with this Order.... Try again...</h2>";
	
}

mysqli_close($db);

}


?>

</body> 
</html>
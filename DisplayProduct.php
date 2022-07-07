<!Doctype html>
<head>
<title> </title>
<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h2 class = "f"> Product Details </h2>
<hr>
<?php

include 'Connection.php';

$string = $_GET['p'];

$string2 = $_GET['p2'];

if($string == 'Men')
{

$query = "select * from men where Product_id = '$string2'";

$r = mysqli_query($db,$query) or die("There is no Data");

}
else
{

$query2 = "select * from woman where Product_id = '$string2'";

$r = mysqli_query($db,$query2) or die("There is no Data");

}


while($row5 = mysqli_fetch_row($r))
{

	
echo "<form action = 'Cart.php?' method = 'post'>";

echo "<table width='1000' height= 318 border= 0 cellpadding= 0 cellspacing = 5 align = center style = 'padding:5px; background-color:white; font-family:Futura Lt BT; font-weight:400; font-size:15px;'> <tr>";

echo " <td align = center rowspan= 7><img src ='".$row5[5]."' class = 'imgbg' height = 307 width = 230><br></td>";
echo " <td>Product Id :<td> <input type = 'text' class = 'in7' name = 'id' value = '".$row5[0]."' readonly> </td>";
echo "</tr> <tr>";
echo " <td>Product Name <td><input type = 'text' name = 'pn' class = 'in7' value = '".$row5[2]."' size = 40 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Brand <td> <input type = 'text' name = 'b' class = 'in7' value = '".$row5[3]."' readonly> </td>";
echo "</tr> <tr>";
echo " <td>Description<td><input type = 'text' name = 'd' class = 'in7' value = '".$row5[6]."' size = 40 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Price<td><font style = 'font-family:Rupee Foradian'>` </font> <input type = 'text' class = 'in7' name = 'p' value = '".$row5[4]."' readonly> </td>";
echo "</tr> <tr>";
echo "<td> Quantity</td><td><input type = 'number' min = '1' max = '10'  value = '1' name = 'quantity' size = 1> <input type 'text'  value = '".$row5[1]."' class = 'in8'name = 'c' size = 1></td>";
echo "</tr> <tr>";
echo "<td colspan = 2><button type = 'submit' class = 'Addtocart' name = 'submit'> Add to Cart </button></td>";
echo "</tr> <tr>";
echo "<td colspan = 2>&nbsp;</td>";

}

echo "  </tr> </table>";
echo "</form>";

mysqli_close($db);
?>


<hr>
<h2 class = "f"> Related Products </h2>
<?php

include 'Connection.php';

$string = $_GET['p'];

$string2 = $_GET['p2'];

$string3 = $_GET['p3'];

if($string == 'Men')
{

$query = "select * from men where ProductType = '$string3' and Product_id not in(select Product_id from men where Product_id = '$string2')";

$result5 = mysqli_query($db,$query) or die("There is no Data");

}


else
{

$query2 = "select * from woman where ProductType = '$string3' and Product_id not in(select Product_id from woman where Product_id = '$string2')";

$result5 = mysqli_query($db,$query2) or die("There is no Data");

}



echo "<table cellspacing = 10 cellpadding = 10 style='font-family:Futura Lt BT; font-weight:400;'> <tr>";

$c = 0;

while($row = mysqli_fetch_array($result5))
{	
$c++;	

echo "<td class = 'imgbg'>  

<a href ='DisplayProduct.php?p=$row[1]&p2=$row[0]&p3=$row[2]'><img src ='".$row['Imagepath']."'> </a><br> <font style = 'font-family:Rupee Foradian'>` </font>".$row['Price'];

if($c == 4)
{
echo "<tr>";
}

if($c >= 4)
{
$c = 0;
}
}


echo "</td></tr></table>";

?>



</body>
</html>
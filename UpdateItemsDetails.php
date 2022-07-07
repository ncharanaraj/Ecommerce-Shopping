<!DOCTYPE HTML>
<HEAD>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<link rel = "stylesheet" type = "text/css" href = "menu.css">
</HEAD>
<BODY>
<h1 align = center class = "f"> Update Product </h1><hr> 

<?php


include 'Connection.php';


$pid = $_GET['i'];

$c = $_GET['c'];


if($c == 'men')
{

$query = "select * from men where Product_id = '$pid'";

$r = mysqli_query($db,$query) or die("There is no Data");

}
else
{

$query2 = "select * from woman where Product_id = '$pid'";

$r = mysqli_query($db,$query2) or die("There is no Data");

}

echo "<form action = 'updateitems.php' method = 'post'>";

echo "<table width='1000' height= 318 border= 0 cellpadding= 0 cellspacing = 5 align = center style = 'padding:5px; background-color:white; font-family:Futura Lt BT; font-weight:400; font-size:15px;'> <tr>";

echo "<div style = 'visibility:hidden;'><input type = 'text' name = 'cat' value = '".$c."'> </div>";

while($row6 = mysqli_fetch_row($r))
{
	
echo " <td align = center rowspan= 7><img src ='".$row6[5]."' class = 'imgbg' height = 307 width = 230><br></td>";
echo " <td>Product Id :<td> <input type = 'text' class = 'in7' name = 'id' value = '".$row6[0]."' size = 60 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Product Name <td><input type = 'text' name = 'pn' class = 'in7' value = '".$row6[2]."' size = 60 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Brand <td> <input type = 'text' name = 'b' class = 'in7' value = '".$row6[3]."' size = 60 readonly> </td>";
echo "</tr> <tr>";
echo " <td>Description<td><input type = 'text' name = 'd' class = 'in60' value = '".$row6[6]."' size = 60 required> </td>";
echo "</tr> <tr>";
echo " <td>Price<td><font style = 'font-family:Rupee Foradian'>` </font> <input type = 'text' class = 'in60' name = 'p' value = '".$row6[4]."' size = 58 required> </td>";

echo "</tr> <tr>";
echo "<td colspan = 2><button type = 'submit'  class = 'Addtocart'name = 'submit'> Update </button></td>";
echo "</tr> <tr>";
echo "<td colspan = 2>&nbsp;</td>";
	
}


echo "  </tr> </table>";
echo "</form>";


mysqli_close($db);


?>
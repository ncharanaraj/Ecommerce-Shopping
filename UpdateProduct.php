<?php
session_start();
if(!isset($_SESSION['Admin']))
{

echo "<h2>Please Login First.....</h2>";

}

else
{

?>

<!DOCTYPE html> 
<head>
<title>Update Product</title>

<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
 <h1 align = center class = "f"> Update Product </h1><hr> 

<form method="post" action="<?php $_PHP_SELF ?>"> 
<table  border="0" cellpadding="9" cellspacing="9">
  <tr>
    <td>Category :</td>
    <td>
<input type="radio" name="cat" value="men" >        
Men  
 &nbsp;&nbsp;  &nbsp;
        <input type="radio" name="cat" value="woman" required>
        Woman </td>
	<td>Product Type :</td>
    <td><select name="menu1" required>
      <option value = ""> ------------------------Select------------------------</option>
      <optgroup name = "menclothes" label = "Men's Clothes">
      <option> Formal shirts</option>
      <option> Slogan T-shirts</option>
      <option> V-neck T-shirts</option>
      <option> Round neck T-shirts</option>
      <option> Full sleeve Tees</option>
      </optgroup>
      <optgroup name = "womanclothes" label = "Woman's Clothes">
      <option> Dresses-Anarkalis</option>
      <option> Indo-Ethnic Kurtas And Tops</option>
      <option> Saris</option>
      <option> Skirts</option>
      <option> Trousers and shorts-Pants And Palazzos</option>
      <option> Tshirts-Shirts</option>
      <option> Wedding clothing</option>
      <option> Western Wall</option>
      </optgroup>
    </select> </td>
	<td>Brand : </td>
	<td>
	<select name="brands" required>
      <option value = ""> ------------------------Select------------------------</option>
	 <option value = "None">None</option>
	  <optgroup name = "Man's Brand" label = "Man's Brand">
	<option> Spykar </option>
	<option>Turtle </option>
	<option>Tom Hatton </option>
	<option>Peter England </option>
	<option>LondonBridge </option>
	<option>Lotto </option>
<optgroup name = "woman's Brand" label = "Woman's Brand">
     
      <option>Bombay Fashion</option>
      <option>Kiari</option>
      <option>Aurilia</option>
      <option>Allen Solly</option>
      <option>Karigari</option>
      <option>Morden Fashion</option>
      <option>Shripa</option>
	  <option>Women</option>
	  <option>Bombay Style</option>
	  <option>Varsiddhi</option>
    </select>
	</td>
	<td><input name="submit" type = "submit"  name = "submit" value = "Display" class="d"> </td>
  </tr> 
  </table>
</form>
</body>
</html>

<?php

}

?>

<?php

include 'Connection.php';

if(isset($_POST['submit']))
{

$cate = $_POST['cat'];

$m = $_POST['menu1'];

$b = $_POST['brands'];

if($cate == 'men')
{
	$result = mysqli_query($db,"SELECT * FROM men where ProductType = '$m' and Brand = '$b'");
}

else
{
	$result = mysqli_query($db,"SELECT * FROM woman where ProductType = '$m' and Brand = '$b'");
}



echo "<table cellspacing = 20 cellpadding = 5> <tr align = center>";

$count = 0;

while($row = mysqli_fetch_array($result))
{
	$count++;
	$id = $row[0];

	echo "<td style = 'background-color:#e8e9e7;'><a href = 'UpdateItemsDetails.php?i=$id&c=$cate'> <img src = '".$row[5]."' height = 307 width = 230> </a>";
	
	if($count == 5)
	{
		echo "<tr>";
	}
	if($count > 5)
	{
		$count = 0;
	}
	

}

echo "</tr> </table>";


mysqli_close($db);

}

?>
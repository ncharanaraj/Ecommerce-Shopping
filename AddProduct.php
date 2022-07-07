<?php
session_start();
if(!isset($_SESSION['Admin']))
{

echo "<h2> Please Login First..... </h2>";

}
else
{

?>

<! DOCTYPE HTML>
<head>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<script language = "javascript">
function seeList(form) 
{
	var result = ""
	for (var i = 0; i < form.menu1.length; i++) 
	{
		if (form.menu1.options[i].selected) 
		{
			result += "\n " + form.menu1.options[i].label
		}
	}
			document.getElementById("optionlable").value = result;
}

</script>
</head>
<body>

<h1 align = center class = "f"> Add Products </h1>
<hr>
<form  method="post" action="<?php $_PHP_SELF ?>" enctype = "multipart/form-data"> 
<table width="450" cellpadding="9" cellspacing="9">
  <tr>
    <td>Category</td>
    <td>
<input type="radio" name="cat" value="men" >        
Men  
 &nbsp;&nbsp;  &nbsp;
        <input type="radio" name="cat" value="woman" required>
        Woman </td>
  </tr>

  <tr>
    <td>Brand Name</td>
    <td><select name="brands" class = "in40">
      <option> ------------------------Select------------------------</option>
	 <option value = "None">None</option>
<optgroup name = "MansBrand" label = "Man's Brand">
	<option value = "Spykar"> Spykar </option>
	<option value = "Turtle">Turtle </option>
	<option value = "Tom Hatton">Tom Hatton </option>
	<option value = "Peter England">Peter England </option>
	<option value = "LondonBridge">LondonBridge </option>
	<option value = "Lotto">Lotto </option>
<optgroup name = "woman's Brand" label = "Woman's Brand">
      <option value ="Bombay Fashion">Bombay Fashion</option>
      <option value ="Kiari">Kiari</option>
      <option value ="Aurilia">Aurilia</option>
      <option value ="Allen Solly">Allen Solly</option>
      <option value ="Karigari">Karigari</option>
      <option value ="Morden Fashion">Morden Fashion</option>
      <option value ="Shripa">Shripa</option>
	  <option value ="WOMEN">Woman</option>
	  <option value ="Bombay style">Bombay style</option>
	  <option value ="Varsiddhi">Varsiddhi</option>
    </select></td>
  </tr>
  <tr>
    <td>Product Type</td>
    <td>

<select name="menu1" id = "m" class = "in40">
<option> ------------------------Select------------------------</option>
<optgroup name = "menclothes" label = "Men's Clothes">
<option  label = "Formal shirts" value="Collection/Men/Formal Shirts/"> Formal shirts</option>
<option label = "Slogan T-shirts" value="Collection/Men/slogan/"> Slogan T-shirts</option>
<option label = "V-neck T-shirts" value="Collection/Men/Vneck/"> V-neck T-shirts</option>
<option label = "Round neck T-shirts" value="Collection/Men/Rneck/"> Round neck T-shirts</option>
<option label = "Full sleeve Tees" value="Collection/Men/Full sleev/"> Full sleeve Tees</option>
</optgroup>
<optgroup name = "womanclothes" label = "Woman's Clothes">
<option label = "Dresses-Anarkalis" value="Collection/Woman/Dresses-Anarkalis/"> Dresses-Anarkalis</option>
<option label = "Indo-Ethnic Kurtas And Tops" value="Collection/Woman/Indo-Ethnic Kurtas & Tops/"> Indo-Ethnic Kurtas And Tops</option>
<option label = "Saris" value="Collection/Woman/Saree/"> Saris</option>
<option label = "Skirts" value="Collection/Woman/Skirt/"> Skirts</option>
<option label = "Trousers and shorts-Pants And Palazzos" value="Collection/Woman/Trousers-Palazzo/"> Trousers and shorts-Pants And Palazzos</option>
<option label = "Tshirts-Shirts" value="Collection/Woman/Tshirts-Shirts-Tunics-maxi-gown/"> Tshirts-Shirts</option>
<option label = "Wedding clothing" value="Collection/Woman/Weddingclothing/"> Wedding clothing</option>
<option label = "Western Wall" value="Collection/Woman/WesternWall/"> Western Wall</option>
</optgroup>
    </select>  </tr>  <tr>
    <td>Description</td>
    <td>     
     
          <textarea name="Description" rows="5" cols="35" required ></textarea>     
          <div style = "visibility:hidden;"><input type = "text" name = "lable" id = "optionlable"></div></td>
  </tr>
  <tr>
    <td>Price</td>
    <td style = "font-family:Rupee Foradian">`  
      <input type="text" name="price" size = 16 required>        </td>
  </tr>
  <tr>
    <td>Upload Image </td>
    <td> &nbsp;  &nbsp;<input type = "file" name = "FileToUpload" required>     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit" type = "submit" name = "submit" value = "Add Product" class="button3" onclick = "seeList(this.form) ">
        <input name="clear" type = "reset" value = "Clear" class="button4">      </td>
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
	
$c = $_POST['cat'];

$b = $_POST['brands'];

$path = $_POST['menu1'];

$desc = $_POST['Description'];

$p = $_POST['price'];

$lab =  trim($_POST['lable']);

$tf = $path.basename($_FILES['FileToUpload']['name']);

$np = "/project/".$tf;

if($c == 'men')
{
	mysqli_query($db,"INSERT INTO men(ProductType, Brand, Price, Imagepath, Description) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}

elseif($c == 'woman')
{
	mysqli_query($db,"INSERT INTO woman(ProductType, Brand, Price, Imagepath, Description) VALUES('".$lab."', '".$b."', '".$p."', '".$np."', '".$desc."')") or die("Failed to Insert Data in Database");
}
else
{
	echo "Please Select Category...";
}

$flag = "";

if($_FILES['FileToUpload']['name'] != "" )
{
$fileType = pathinfo($tf,PATHINFO_EXTENSION);

$check = getimagesize($_FILES['FileToUpload']['tmp_name']);	

if($check == true)
{
	$flag = 1;
}	

else
{
	echo "<h3> File is not an Image</h3>";
	$flag = 0;

}

if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif")
{

echo "<h3>This Type of File is Not allowed</h3>";
$flag = 0;

}
else
{

$flag = 1;

}

if(file_exists($tf))
{

echo "<h3>File is Already Exists.....!!!</h3>";
$flag = 0;
}
else
{
$flag = 1;
}

if($flag == 1)
{
move_uploaded_file($_FILES['FileToUpload']['tmp_name'], $tf) or die( "Could not Move file!");

echo "<h3>Successfullly Product Added....!!!!</h3>";
}
else
{

echo "</br> <h3>Failed to Upload file....!!!!</h3>";

}

}

else
{
echo "<h3> No file Selected....<h3>";

}

mysqli_close($db);
}
?>

<!Doctype html>
<body>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<h1 class = "f"> Your Shoping Cart</h1>
<hr>

<?php

session_start();

include 'Connection.php';

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

	if(isset($_POST['submit']))
	{
			$cate = $_POST['c'];
			
			$p_id = $_POST['id'];

				if($cate == 'Men')
				{
					$q = "select * from men where Product_id = $p_id ";
				}
				else
				{
					$q = "select * from woman where Product_id = $p_id";
				}	
	
					$result = mysqli_query($db,$q) or die("Error in Selecting Data");

					while($r = mysqli_fetch_row($result))
					{
						$items[] = $r;				
					}

		$itemArray = array($items[0][0]=>array('Proid' => $items[0][0], 'name'=>$items[0][2], 'brand'=>$items[0][3], 'desc'=>$items[0][6], 'quan'=>$_POST["quantity"], 'price'=>$items[0][4], 'image'=> $items[0][5]));
		
		$_SESSION['cart'] += $itemArray;
		
		
	}
	


			elseif(empty($_SESSION['cart']))
			{				
				echo "<h2>There is No Items in Your Cart...........</h2>";
			}
	

			elseif(isset($_GET['action']))
			{
				foreach($_SESSION["cart"] as $k => $v) 
				{
					if($_GET["id"] == $k)
					{
						unset($_SESSION["cart"][$k]);				
						
					}
					
				}	
					if(empty($_SESSION['cart']))
					{
			
						echo "<h2>There is No Items in Your Cart...........</h2>";
			
					}
				
	}


	if(!empty($_SESSION['cart']))
	{
		echo "<a href = 'CheckOut.php' target = 'myframe'><Button class = 'Addtocart'> Check Out </button> </a>";
		
	}
	
echo "<table  width = 1000 cellspacing = 10 cellpadding = 5 style='font-family:Futura Lt BT; font-weight:400;'> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<b><td> <strong>Product Id  <td> <strong> Image <td> <strong> Description <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td> <td><strong> Action </td> <tr>";		
	
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
	
	$i = $item['Proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	echo "<td align = 'center'> ".$item['Proid'];
	echo "<td align = 'center'><img src = '".$item['image']."' height = 120 width = 120>";
	echo "<td> ".$item['desc'];
	echo "<td align = 'center'> ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];	
	echo "<td align = 'center'>".$tp;
	echo "<td align = 'center'> <a href ='Cart.php?action&id=$i'> <img src = 'remove_x.gif' height = 10 width = 10> </a> </td>";
	
	echo "<tr>";
	
	
}

	echo "</tr>";
	echo "<tr style = 'background-color:#e8e9e7;'> <td colspan = 5 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong> ` </font>".$tp2;;
	echo "<td> </tr></table>";		
	

?>

</body>
</html>
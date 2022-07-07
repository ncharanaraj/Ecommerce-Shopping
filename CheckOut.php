<!DOCTYPE>
<head>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<script src="validation2.js"></script>
</head>
<body>
<?php

session_start();

include 'Connection.php';

if(isset($_SESSION['Email']))
{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

?>

<h2 class = "f"> Secure Checkout</h2>
<hr>
<form name = "checkout" action="check.php" method="post" onsubmit = "return validation5()">
      <table width="1038" border="0" cellspacing="5" cellpadding="5" style="font-family:Futura Lt BT; font-weight:400;">
        <tr>
          <td colspan="2" style = "background-color:#07aaf6; color:white;"><strong>Shipping Info </strong> </td>
          <td colspan="2"style = "background-color:#07aaf6; color:white;"><strong>Shipping Method </strong></td>
          <td colspan="2"style = "background-color:#07aaf6; color:white;"><strong><strong>Payment Method</strong> </td>
          <td width="93">&nbsp;</td>
          <td width="112">&nbsp;</td>
        </tr>
        <tr>
          <td width="91">First Name </td>
          <td width="172"><input name="sfname" type="text" class="in9" id="sfname" size="20" placeholder="First Name" maxlength = 10 tabindex="1" onblur = "alphabet()" required/>
          <td width="99"><input name = "shipcharge" type="radio" value="Free Shipping"tabindex="10">          
          ₹ 0.00</td>
          <td width="127">Free Shipping </td>
          <td width="20"><div align="center">
              <input name = "payment" type="radio" onClick="c2(this)" value="Cash on delivery" tabindex="12">
          </div></td>
          <td width="181">Cash on delivery </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Last Name </td>
          <td><input name="slname" type="text" class = "in9" id="slname" placeholder="Last Name" maxlength = 10 tabindex="2" onblur = "alphabet2()" required/></td>
          <td><input name = "shipcharge" type="radio" value="Standard Shiping" tabindex="11"required/>
            ₹ 8.50 </td>
          <td>Standard Shipping </td>
          <td><div align="center">
            <input name = "payment" type="radio" onClick="c(this)" value="Credit Card" tabindex="13" required/>
          </div>
          <td> Credit Card </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Email </td>
          <td><input name="semail" type="email" class = "in9" id="semail" placeholder="E-mail" tabindex="3" onblur = "validateE()"required/></td>
          <td colspan="4" rowspan="5">   <div id ="creditcard" style="visibility:hidden;">       <table cellspacing="5" cellpadding="5" style = "border :1px solid #07aaf6; border-radius:5px;">
            <tr>
              <td>Credit Card Type  
              <td><select name="Ctypes" class="in11" id="Ctypes">
                <option selected>Visa</option>
                <option>MasterCard</option>
                <option>Maestro International</option>
              </select></td>
            </tr>
            <tr>
              <td>Name on Credit Card  
              <td><input name="Nc" type="cname" class = "in9" id="Nc"></td>
            </tr>
            <tr>
              <td>Credit Card Number 
              <td><input name="CCno" type="cnum" class = "in9" id="CCno" maxlength = 16>                  </td>
            </tr>
            <tr>
              <td>CVV 
              <td><input name="cvv" type="cvv" class = "in9" id="cvv">                  </td>
            </tr>
            <tr>
              <td>Expiration Date 
              <td><select name="mon" class="in12" id="mon">
                      <option selected="selected">Month</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                      <select name="yer" class="in12" id="yer">
                        <option>Year</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                    </select></td>
            </tr>
                    </table> </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Address </td>
          <td><textarea name="Address" cols = 23  rows = 3 class = "in10" tabindex="4" required></textarea></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Country </td>
          <td><select name="select"  class="in11" tabindex="5">
			<option value="africa">Africa</option>
			<option value="asia">Asia</option>
		<option value="australia">Australia/Pacific</option>
		<option value="europe">Europe</option>
		<option value="noamer">North America</option>
		<option value="soamer">South America</option>
		<option value="India" selected>India</option>
                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> State </td>
          <td><select name="select2" class="in11" tabindex="6">
   
			
<option>Arunachal Pradesh
<option>Andhra Pradesh
<option>Bihar
<option>Bhutan
<option>Bangladesh
<option>Chhattisgarh
<option>Jammu & kashmir
<option>Himachal pradesh
<option>Punjab
<option>Rajstan
<option selected>Gujarat
<option>Madhya pradesh
<option>Uttar Pradesh
<option>Maharashtra
<option>Telangana
<option>Karnataka
<option>Tamil nadu
<option>Orissa
<option>Kerala
<option>uttarkhand
<option>Nepal
<option>Jharkhand
<option>West Bengal
<option>Tripura
<option>Myanmar
<option>Assam(Asom)
<option>Nagaland
<option>Himachal Pradesh
<option>Goa
                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> City </td>
          <td><select name="select3" class="in11" tabindex="7">
            <option>Ahemdabad
<option>Anand
<option>Ahwa
<option>Amreli
<option>Bharuch
<option>Bhavnagar
<option>Bhuj
<option>Dahod
<option>Godhra
<option>Himantnagar
<option>Jaunagadh
<option>Jamnagar
<option>Mahesana
<option>Navsari
<option>Nadiad
<option>Porbandar
<option>Palanpur
<option>Patan
<option>Rajpipla
<option>Surendranagar
<option>Sabarkantha
<option>Surat
<option>Valsad
<option>Vyara
<option selected>Vadodara
                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Zip code </td>
          <td><input name="zcode" type="text" class = "in9" placeholder="Zip Code" onblur = "numb2()" tabindex="8"/></td>
          <td colspan="6"><strong><p style = "background-color:#07aaf6; color:white; padding:5px;">Your Order </p></strong></td>
        </tr>
        <tr>
          <td> Contact </td>
          <td><input name="stel2" type="tel" class = "in9" id="stel2" placeholder="Contect Phone" tabindex="9" maxlength = 10 onblur = "numb()" required/></td>
          <td colspan="6" rowspan="5">

<?php

echo "<table cellspacing = 5 cellpadding = 3 width = 700> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<b><td> <strong>Product Id <td> <strong> Product Name <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td><tr>";		
	
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
	
	$i = $item['Proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	echo "<td align = 'center'> ".$item['Proid'];
	//echo "<td align = 'center'><img src = '".$item['image']."' height = 90 width = 90>";
	echo "<td> ".$item['desc'];
	echo "<td align = 'center'> ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];	
	echo "<td align = 'center'>".$tp;
	
	echo "<tr>";
	
	
}

	echo "</tr>";
	echo "<tr style = 'background-color:#e8e9e7;'> <td colspan = 4 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong> ` </font>".$tp2;;
	echo "<td> </tr></table>";	
?>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="6">          
            
            <div align="right">
              <input type="submit" class = "Addtocart" name="submit" value="Place Order Now">
            </div></td>
        </tr>
      </table>
</form>

<?php	
}

else
	
{
	echo "<h2 style = 'color:red;'> Please Login First or Sign up Now......</h2>";

}


?>

</body>
</html>
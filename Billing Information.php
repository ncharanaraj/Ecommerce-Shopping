<!DOCTYPE html>
<head>

<link rel = "stylesheet" type = "text/css" href = "menu.css">
</head>

<body>
<h2> Checkout</h2>
<hr>
<table width="778" cellpadding="5" cellspacing="5">
  <tr>
    <td width="258" rowspan="5"><table cellpadding = 5 cellspacing=10;  style = "border:1px solid;">
      <tr>
        <td width="216" style = "border:1px solid; text-align:center;">Billing Address </td>
      </tr>
      <tr>
        <td><input name="text" type="text" class="in9" size="20" placeholder="First Name" /></td>
      </tr>
      <tr>
        <td><input name="text" type="text" class = "in9" placeholder="Last Name"/></td>
      </tr>
      <tr>
        <td><input name="email" type="email" class = "in9" placeholder="E-mail" /></td>
      </tr>
      <tr>
        <td><textarea name="textarea" cols = 23  rows = 3 class = "in10" >Address </textarea></td>
      </tr>
      <tr>
        <td><select name="select" >
            <option> ---------Select Country--------</option>
          </select>        </td>
      </tr>
      <tr>
        <td><select name="select">
            <option>-----------Select State---------- </option>
          </select>        </td>
      </tr>
      <tr>
        <td><select name="select">
            <option> ------------Select City-----------</option>
          </select>        </td>
      </tr>
      <tr>
        <td><input name="text" type="text" class = "in9" placeholder="Zip Code"/></td>
      </tr>
      <tr>
        <td><input name="tel" type="tel" class = "in9" placeholder="Contect Phone"/></td>
      </tr>
      <tr>
        <td><input type="radio" name = "ship"/>
        Ship to This Address <br>        </tr>
    </table></td>
    <td colspan="2"><div align="center"><strong>Shipping Method </strong></div></td>
    <td colspan="2"><div align="center"><strong>Payment Method </strong></div></td>
  </tr>
  <tr>
    <td width="104"><div align="center"><strong>Price</strong>    
    </div>
    <td width="171"><div align="center"><strong>Shiping Services</strong>
      
    </div>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><input type="radio" name = "shipcharge"/>
$0.00</td>
    <td>Free Shiping </td>
    <td width="24"><input type="radio" name = "payment"/></td>
    <td width="139">Cash on delivery </td>
  </tr>
  <tr>
    <td><input type="radio" name = "shipcharge"/>
$8.50 </td>
    <td>Standard Shiping </td>
    <td><input type="radio" name = "payment"/>
    <td> Credit Card </td>
  </tr>
  <tr>
    <td colspan="4"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

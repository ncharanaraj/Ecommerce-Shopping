<?php

session_start();

if(!isset($_SESSION['Email']))
{

echo "<h2>Please Login first...........</h2>";

}
else
{

?>

<!DOCTYPE html>
<head>
<title>Change Password</title>
<script src="passvalidation.js"></script>
</head>
<link href="menu.css" rel="stylesheet" type="text/css"/>
<link href="mystyle.css" rel="stylesheet" type="text/css"/>

<body>
<h1 align="center" class = "f">Change Password</h1>
<hr>

<form name="Change" action = "Updatepassword.php" method = "post" onSubmit="return check()">
<table align="center" style = "font-family:Futura Lt BT; font-weight:400;" cellpadding="5" cellspacing="15">
  <tr>

    <td>New Password</td>
    <td><input type="password" id = "np" name="npassword" class = "in6" size="20" placeholder = "New Password" maxlength="8" onblur = "pass()" required/></td>
  </tr>
  <tr>
    <td>Confirm Password</td> 
    <td><input name="c_password" id = "cp" class = "in6" type="password" size="20" placeholder = "Confirm Password" maxlength="8" onblur = "cpassword()" required/> </td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td><input type="submit" name = "submit" value = " Change Password " class = "Addtocart">
</tr>
</table>

</form>
</body>
</html>
<?php
}
?>

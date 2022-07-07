<html>
<head>
<title>Sign in </title>
<script src="validation.js"></script>
</head>
<body>
<form name = "signin" action="signupform.php" method="post" onSubmit = "return validation()">
<table width="450" border = 0 cellspacing="8" cellpadding="8" align = "center">
  <tr>
    <td> First Name  </td>
    <td><input name="fname" id = "fid" type="text" class = "in" size="25" maxlength="15" placeholder = "First name" onblur = "alpha()" required/>
</td> 
  </tr>
  <tr>
    <td> Last Name</td>
    <td><input type="text" id = "lid" name="lname" class = "in" placeholder = "Last name"size="25" maxlength="15" onblur = "alphabetic()"required/>
	</td>
  </tr>
    <tr>
    <td> Gender </td>
    <td> Male <input type="radio" name="g" value = "male"/> &nbsp;Female <input type="radio" name="g"  value ="female" required/></td>
  </tr>

  <tr> 
    <td>Contact no</td>
    <td><input type="text" name="contact" id = "cid" class = "in" size="25" placeholder = "Contact no" maxlength="10" onblur = "num()" required/>
</td>
  </tr>
  <tr>
    <td>Email Id</td>
    <td><input type="email" id = "eid" name="email" class = "in" size="25" placeholder = "Email Id" maxlength="40" onblur = "validateEmail()" required/>
</td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password"  id = "pa" name="password" class = "in" size="25" placeholder = "Password" maxlength="8" onblur="pass_validation()"required/></td>
  </tr>
  <tr>
    <td>Confirm Password</td> 
    <td><input name="c_password" id = "cpid" class = "in" type="password" size="25" placeholder = "Confirm Password" maxlength= "8" onblur="passid_validation()" required/> 
	
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name = "submit" value = " Sign in " class = "button"/> 
<input name="clear" type="reset" value = "  Clear  " class = "button"/></td>
  </tr>
</table>
</form>
</body>
</html>
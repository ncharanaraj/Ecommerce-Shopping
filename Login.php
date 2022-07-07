<! DOCTYPE html> 
<head>
<title>Login</title>
<script src="validation.js"></script>
</head>
<body>
<form name = "login" action = "Loginform.php" method = "post">	 
<input name = "Email_id" id = "eid" type = "email" class = "in2" maxlength = "40" size = 23 placeholder = "Email Id" onblur = "validateEmail2()" required>
<br>
<br>
<input name = "password"  id = "p" type = "password" maxlength = "8" placeholder = "Password" size = 23 class = "in2" required>
<br><br>
<input type = "submit" name ="login"  class = "button" id = "login" value = "Login">
<input type = "reset" name = "reset" class = "button" value = "Clear"> <br>
<label style="font-size:13px;"> <a href="ForgotPassword.php" target = "myframe">Forgot Password?</a> </label>
</form>
</body>
</html>
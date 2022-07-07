<! DOCTYPE html> 
<head>
<title>Forgot Password</title>
<script src="validation.js"></script>
</head>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
<body>
<h1 class = "f"> Forgot Password </h1>
<hr>
<form name = "fpassword" action = "<?php $_PHP_SELF ?>" method = "post">	 
<input name = "Email_id" id = "eid" type = "email" class = "in2" maxlength = "40" size = 23 placeholder = "Email Id" onblur = "validateEmail2()" required>

<input type = "submit" name ="submit"  class = "button5" id = "login" value = "Submit">

</form>
</body>
</html>
<?php

include 'Connection.php';

if(isset($_POST['submit']))
{

$eid = $_POST['Email_id'];	

$query = "SELECT EmailId FROM signuptable where EmailId = '$eid'";

$result = mysqli_query($db,$query);
	
$c = mysqli_fetch_row($result);
	
if($c)	
{
	$query = "SELECT * FROM signuptable where EmailId = '$eid'";
	$result = mysqli_query($db,$query);
	$rows = mysqli_fetch_row($result);
	$t = $rows[5];
	$p = $rows[6];	
	
        $body  =  "<br> Password Recovery <br>-----------------------------------------------<br>".
        "<br> Your Email Id is : ".$t.
        "<br>Here is your password  :".$p."
        <br> Sincerely, <br>
        FashionMode Team";
	
        $subject = "Password recovered";
        $headers1 = "From: FashionMode.com\n";
        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
        $sentmail = mail($t, $subject, $body, $headers1);
	
		if($sentmail)
		{
		echo "<h2>Your Password has been sent to Your Email id.............</h2>";	
		}
		else
		{			
		echo "<h2 style = 'color:red;'> Somthing Wrong with Sending Email to You, Please Check Your Internet Connection....</h2>";		
		}
		
}
else
{

		echo "Sorry This Email id is Not Regester with us....."	;
	
}

mysqli_close($db);
}

?>
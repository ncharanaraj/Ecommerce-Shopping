<?php

session_start();

if(isset($_SESSION['Admin'])) 
{

?>

<! DOCTYPE HTML>
<head>
<title>E-Commerce</title>
</head>
<body>
<?php include 'Header3.php';?>
</body>
</html>

<?php

}

else
{
	
header("location:index.php");
	
}

?>
<?php

session_start();

if(isset($_GET['logout'])) 
{
unset($_SESSION['Email']);
unset($_SESSION['name']);

if(isset($_SESSION['Admin'])) 
{
unset($_SESSION['Admin']);
}
}


?>

<! DOCTYPE HTML>
<head>
<title>E-Commerce</title>
</head>
<body>
<?php include 'InputHeader.php'; ?>

<iframe src = "Contain.php" style = " border: 0px; height:1070px; width:260px;" seamless="seamless"></iframe> 
</iframe>
</body>
</html>
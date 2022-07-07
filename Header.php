<!DOCTYPE HTML>
<head>
<title>Welcome to E-Commerce.com</title>
<style type="text/css"> 
.button 
{ 
width: 100px;
padding: 5px;
background-color:#07aaf6;
// box-shadow: -5px 8px 10px 3px rgba(0,0,0,0.1); 
color:white;
}
#cover
{ 
position:fixed;
top:0;
left:0; 
background-color:#F2F2F2;
z-index:1; 
width:100%; 
height:100%; 
display:none;

}
 
#signupscreen 
{ 
height:450px; 
width:950px; 
top:80px;
left:455px;
position:fixed;
z-index:10; 
display:none; 
box-shadow: -8px 8px 20px 8px rgba(0,0,0,0.2); 
background-color:white;
border:5px solid #00000;
border-radius:5px; 
font-family:sans-serif;
} 
#loginscreen
{

/*height:100px; 
width:240px; 
top:5px;
z-index:1;
position:fixed;
left:1105;
display:none;
background-color:white; */

height:350px; 
width:450px; 
top:80px;
left:455px;
position:fixed;
z-index:10; 
display:none; 
box-shadow: -8px 8px 20px 8px rgba(0,0,0,0.2); 
background-color:white;
border:5px solid #00000;
border-radius:5px; 
font-family:sans-serif;
}
#signupscreen:target, #signupscreen:target + #cover{ display:block; opacity:0.9; } 

#loginscreen:target,#loginscreen:target + #cover{ display:block; opacity:2; } 


.cancel 
{ 
display:block; 
position:absolute; 
top:0px; 
right:0px; 
background-color:rgb(245,245,245);
color:gray; 
height:30px; 
width:35px; 
font-size:30px; 
text-decoration:none;
text-align:center; 
}
.cancel:hover
{
	
	color:red;
	
}
  
</style> 
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "dropdownmenu.css">
<link rel = "stylesheet" type = "text/css" href = "Headerbtn.css">
</head>
<body>

        <div align="center" style="top:0px">
          <table border = 0 height = 50 width="1330" bgcolor="#FFFFFF">
          <tr>
	     <td><img src="logo.png">
	 
	<table align= "right">
  <tr>
 
    <td><a href="#loginscreen">Login </a>&nbsp;| 
	<td>
    <a href="#signupscreen">&nbsp;&nbsp;Sign up </a></td>
	<tr>
	<td>  <div id = "loginscreen"> <a href="#" class="cancel">&times;</a>
		<?php include 'Login.php'; ?>
	    </td></div>
				
  </tr>
</table>			  
			</td>
            </tr>
            <tr>
              <td>
			  			
			  <table align="center" class = "t">
                <tr>

                <td style = "text-align:center"><a href="index.php"><button class = "btn">Home </button> </a></td>
            	 	
					<td style = "text-align:center" class = "menu"><div class="dropdown">Category
				  <div class="dropdown-content">
		    		<a href="Menwear.php" target= "myframe">Men's Wear</a>
					<a href="WomanWear.php" target= "myframe">Woman's Wear </a>
				  </div> </div></td>

                  <td style = "text-align:center"><a href="#AboutUs.html" target= "myframe"><button class = "btn"> About us</button></td>                  <td style = "text-align:center"><a href = "ContactUs.php" target = "myframe"><button class = "btn">Contact us</button></a></td>
                  <td style = "text-align:center"><a href = "Cart.php" target = "myframe"><button class = "btn">Cart</button></a></td>
                </tr>
		      </table></td>
                  </tr>
			          </table>
		  				
</div>
<div id="signupscreen"> 
		<a href="#" class="cancel">&times;</a> 
		<?php include 'signup.php'; ?>
</div> 
<div id="cover"></div>      

</body>
</html>
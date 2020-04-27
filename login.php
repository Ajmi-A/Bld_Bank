<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>

<style>
 .reg_cont{
	height:300px; 
    width:700px; 
    padding:50px 0;
	margin:50px auto; 	  
	background-color:#ffff; 
	/* border:.5px solid red;  */
	box-shadow:-1px 0px 20px 13px #c5c5c542;
 } 
 .table-div{
    margin:auto;
 }
</style>
</head>

<body>
<?php include('admin/function.php'); ?>
 
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
  
   
<div class="reg_cont">
     <form method="post" enctype="multipart/form-data">

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" style="margin:auto;" >
     
    <tr>
        <td colspan="2"  align="center">
			<h2 style=" ">
				<b class="size_b">DONOR</b>  <br>
				<b class="size_r" style="font-size:20px !important">LOGIN</b> 
			</h2>				
		</td>
    </tr>
    
     <tr>
         <td colspan="2">&nbsp;</td>
    </tr>  
  
    <tr>
        <!-- <td align="right">
            <img src="Images/login1.png" width="200px" height="150px" />
        </td> -->
 
        <td align="center">
        
        <table cellpadding="0" cellspacing="0" height="200px">             


<tr><td class="lefttd">E-Mail</td><td><input type="email" name="t1" required="required"/></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password"name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>


<tr>
    <td>&nbsp;</td>
    <td>
        <input type="submit" value="Log In" name="sbmt">
    </td>
</tr>
 <tr>
    <td style="font-size:14px"> Not a DONOR? </td>
    <td >
        <a href="registration.php" style="color:#C30">Click here </a> to REGISTER.
    </td>
</tr>
 
              
</table>

</td>
 
</tr>
</table>


		
</form>
</div>

       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
		
	
</div>


<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo "<script>location.replace('donor/index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 
</body>
</html>
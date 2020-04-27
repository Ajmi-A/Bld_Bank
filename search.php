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
	height:auto; 
	width:700px; 
	margin:100px auto; 	  
	background-color:#ffff; 
	padding:30px 0;
	box-shadow:-1px 0px 20px 13px #c5c5c542;
 } 
 select{
	 padding:10px;
	 width:50%;
	 margin:20px 0;
 }
</style> 
</head>

<body>
<?php include('Admin/function.php'); ?>
 
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
  
   
<div class="reg_cont">
	<form method="post" enctype="multipart/form-data">
	<table cellpadding="0" cellspacing="0" width="500px" height="250px" style="margin:auto;">
		
		<tr>
			<td colspan="2" align="center">
				<img src="Images/img/blood_search.png" width="80px" />
				<h2 style="">
					<b class="size_b">SEARCH</b> 
					<b class="size_r">BLOOD</b> 
				</h2>
			</td>			
		</tr>
        <tr>
			<td colspan="2">&nbsp;</td>
		</tr>
        <tr align="center">
			<td class="lefttd" style="padding-left:40px">Select Blood Group </td>
		</tr>
		<tr align="center">
			<td>
				<select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?>

</td>
</tr>
 
               
<tr align="center"> 
	<td colspan="2">
		<input type="submit" value="Search" name="sbmt">
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
if(isset($_POST["sbmt"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>

</body>
</html>
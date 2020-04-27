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
 .main_content{
	 padding:0 50px;
 }
 </style>
</head>

<body>
<?php include('admin/function.php'); ?>
 
<div class="nav_bg">
	<div class="wrap">
		<?php require('header.php');?>
	</div>
</div> 
   
 <main class="main_content">
	<form method="post" enctype="multipart/form-data">
 
	<div class="content">
		<!-- <img src="Images/about.png" height="70px"  /> -->
		<h3>
			<b class="size_b">ABOUT</b> 
			<b class="size_r">US</b> 
		</h3>
			<!-- <h4><span class="bold">News Letter from the Founders</span></h4> -->
			<p>
				<img src="Images/img/about_us_1.jpg" height="200px" style="margin-bottom:40px" /></a>
			'Life Saver Blood Bank' is the first product resulted out of the community welfare initiative called 'People Project' from uSiS Technologies. Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.</p>
			<p class="top">Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients. We remind every visitor that we have the empowerment to save lives and let’s do that – right now, right here. If you are eligible for blood donation, please register yourself as a blood donor now!</p>
			<p class="top">We also take this opportunity to thank our whole team for all your ideas, commitment and hard-ship in making this dream a reality. We would also like to thank our friends and well-wishers for all your support and encouragement throughout this project. It is now reasonably safe to say that together we have made this society a slightly better and safer place to live.</p>
			<p class="top">Thank you and Happy Blood Donating!</p>	
			<b style="font-weight:600;">
			<p class="top"> Ajmi A</p>
			<p> Achuth R </p>
			<p> Abhijith B </p>
			 </b>
			
	</div>
	<div class="sidebar">
		
		<img src="Images/img/our-mission.jpg" />
		<br /><br />
		<img src="Images/img/world_blood_donor_day.jpg" />
						
				 		 
		<div class="clear"></div>	
		 
	</div>
 
		
	</form>
</main>

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
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>
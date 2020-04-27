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
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
  <style>
    .request_bld{
        font-size:3rem;
    }
   
    .bld-img{
        width:100px;
    }
    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.table{
    margin-bottom:100px;
    width:auto;
    height:auto;
   
}
  </style>
</head>

<body>
<?php include('admin/function.php'); ?>

 <!-- <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div> -->
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
    </div>

<div class="container">     
<div class="row">
    <form method="post" enctype="multipart/form-data">
    <div style="padding:20px;text-align:center;">
    <!-- <img src="Images/img/blood-donation.png" alt="" class="bld-img"> -->
        <h2 class="request_bld">
            <b class="size_b">SAVE</b> 
            <b class="size_r">A LIFE</b> 
        </h2>
    </div>
   <div class="table">
   <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >
            <!-- <tr>
                <td colspan="7" align="center">
                    
                    <img src="Images/brequest.png" height="90px" />
                </td>
            </tr>

            <tr><td>&nbsp;</td><td>&nbsp;</td></tr> -->

            <tr style="background-color:bisque" align="center" class="bold">            
                <td class="bold" style="color:red"  >Request_id</td>
                <td >Name</td>
                <td >Gender</td>
                <td >Age</td>
                <td >Mobile No</td>
                <td >Email</td>
                 <td >blood_id</td> 
            </tr> 
        <?php	
            $cn=mysqli_connect("localhost","root","","bloodbank");
            $s="select * from requestes";
            $result=mysqli_query($cn,$s);
            $r=mysqli_num_rows($result);
            //echo $r;
            while($data=mysqli_fetch_array($result))
            {
                        echo"<tr><td  style='text-align:center;'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' text-align:center;  '>$data[2]</td><td style=' text-align:center;'>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td style=' text-align:center;'>$data[6]</td></tr>";
            }
            mysqli_close($cn);
        ?>
    </table>
   </div>
</form>
        </div>
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




			
			
	
</body>
</html>
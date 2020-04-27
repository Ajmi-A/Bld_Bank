<?php 

$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
// echo  $first_part ;
?>
<ul class="nav">
    <li class="<?php if( $first_part=="index.php"){ echo "active"; } ?>"><a href="index.php">Home</a></li>	

    <li class="<?php if( $first_part=="registration.php"){ echo "active"; } ?>"><a href="registration.php">Donor Registration</a></li>    

    <li class="<?php if( $first_part=="requests.php"){ echo "active"; } ?>"><a href="requests.php">Request Blood</a></li>

    <li class="<?php if( $first_part=="viewrequest.php"){ echo "active"; } ?>"><a href="viewrequest.php">View Request</a></li>

    <!-- <li><a href="camps.php">Camps</a></li> -->

    <li class="<?php if( $first_part=="login.php"){ echo "active"; } ?>"><a href="login.php">log In</a></li>

    <li class="<?php if( $first_part=="search.php"){ echo "active"; } ?>"><a href="search.php">Search</a></li>

    <li class="<?php if( $first_part=="contact.php"){ echo "active"; } ?>"><a href="contact.php">Contact Us</a></li>

    <li class="<?php if( $first_part=="aboutus.php"){ echo "active"; } ?>"><a href="aboutus.php">About</a></li>
</ul>


<!DOCTYPE html>
<?php 
function checkActivePage($requestUri)
{
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	if ($current_file_name == $requestUri)
		echo 'class="active"';
}
?>
<html>
   
<head>
	<title>Reno Men</title>
      
	<meta charset="utf-8" />
	<meta name="description" content="Drainmen" />
	<meta name="keywords" content="drainmen, renomen, paintmen, paint men, painting, renovations" />
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
      
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<link href="css/drainmen.css" rel="stylesheet">
      
</head>
   
<body>


	<!------------------------ Header --------------------------------------------------->

	<!------------------------ Navigation --------------------------------------------------->
	


	
	
	<div class="header-main">
	    <div class="header-logo">
		<a href="index.php"><img class="header-logo-image" style="margin-left: 25px" src="resources/images/drainmen-logo.jpg" height="100" width="200"/></a>
		<a href="index.php"><img class="headedr-logo-slogan" style="margin-left: 5px" src="resources/images/renomen-letsbuild.png"/></a>
	    </div>
	    
	    <div class="header-contact">
	    	<a style="text-decoration: none;" href="https://www.facebook.com/PaintMenRenovationContractors">
		    <img id="banner_social_fb" src="/resources/images/facebook-logo-114.png" alt="Find us on Facebook." width="24" height="24" />
		</a>
	   </div>
	   <div class="header-phone">
		<a href="tel:18883834242">
		    <!--<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> -->
		    <img id="banner_social_phone" src="/resources/images/phone-icon.png"" alt="Call us" width="24" height="24" />
		</a>
	    </div>
	    
	    
	</div>
	
	<nav class="navbar navbar-main">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
		   <span class="sr-only">Toggle navigation</span>
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
		</button>
		<!-- <a class="navbar-brand" href="#">Brand</a> -->
		</div>
		
	
		<div class="collapse navbar-collapse" id="main-navbar-collapse">
		
		  <ul class="nav navbar-nav">
		    <li <?=checkActivePage("index")?>><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
		    <li <?=checkActivePage("about_us")?>><a href="about_us.php">Our Services</a></li>
  		    <li <?=checkActivePage("contact")?>><a href="contact.php">Contact</a></li>
  		    <li <?=checkActivePage("quote")?>><a href="contact.php#quote">Get a Quote</a></li>
		  </ul>
		</div> <!-- navbar-collapse -->
	
	</div> <!-- container-fluid -->
	</nav>
	
	<!------------------------ End of Navigation --------------------------------------------------->

	<div id="main_header">


	</div>
	<!------------------------ End of Header --------------------------------------------------->
	
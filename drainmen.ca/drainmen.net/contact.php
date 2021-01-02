<?php include("header.php"); ?>


<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC6isKN5JLNUxF_lh9LRLlvpVqBAmLWLAY"></script>
<script type="text/javascript">
function initialize() {
  var mapCenter=new google.maps.LatLng(48.457476, -123.360125);
  var mapProp = {
    center:mapCenter,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("officeMap"),mapProp);
  
  var marker=new google.maps.Marker({
  position:mapCenter,
  });
  marker.setMap(map);
  
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>



	<!------------------------ Page Content --------------------------------------------------->
	
	<!--
	<div id="page-content-header">
	  <section class="header" id="page-header-title">
	    <div class="container">
		<h5 class="page-title">What's your favourite colour ?</h1>
	    </div>
	  </section>
	</div>
	-->
	
	
	<div id="page-content" class="contact-background" style="padding-bottom:20px;">
	<div id="page-content-margin"><br/></div>	
	
	
	<div class="panel panel-main-content">
	  <div class="panel-heading"><h3 class="panel-title">Call Us!</h3></div>
	  <div class="panel-body">
	  	<div class="row">
		<div class="our-services-left">
		<p>Call our Victoria office at 250-412-5698 or request a free quote below.</p>
		<p>We proudly serve Victoria, the Capital Region (CRD), and surrounding areas. We are also currently expanding and doing work in Vancouver and the lower mainland as well.</p>
		
		<a href="#quote" type="button" class="btn btn-primary" style="">Click here for a quote!</a>
		
		<!-- including Victoria, Oak Bay, Saanich, Esquimalt, View Royal, the West Shore and Western Communities, Langford, Colwood, Metchosin, Sooke, Malahat, Shawnigan Lake, Mill Bay, as well as the Saanich Peninsula, Central Saanich, Sidney, North Saanich, Salt Spring Island and the Gulf Islands. -->
		</div>
		<div class="our-services-right">
		</div>
        	</div>
	  </div>
	</div>
	  
	<div class="panel panel-main-content">
	  <div class="panel-heading"><h3 class="panel-title">Our Location</h3></div>
	  <div class="panel-body">
	  	<div class="row">
		<div class="our-services-left">
		<p><b>Paint Men Global Services Incorporated</b></p>
		<span><u>Victoria</u></span><br>
		<span>3588 Quadra</span><br>
		<span>Victoria, BC,  V8X 1H2</span><br>
		<span>250-412-5698</span><br>
		<br>
		<span><u>Vancouver</u></span><br>
		<span>604-800-9801</span><br>
		<br>
		<span><u>Toll Free:</u></span><br>
		<span>+1-888-383-4242</span><br>
		</div>
		<div class="our-services-right">
		

			<div id="officeMap" style="width:300px;height:240px;margin-top:20px;"></div>
			<div><a href="https://www.google.com/maps/place/3588+Quadra+St,+Victoria,+BC+V8X+1H2/" class="btn btn-primary" style="margin-top:10px; margin-left:60px; width:180px; align: center;">View on google maps</a></div>
			
		</div>
        	</div>
	  </div>
	</div>
	
	
	<a name="quote"/>
	<div class="panel panel-main-content">
	  <div class="panel-heading"><h3 class="panel-title">Request a Quote or Email Us!</h3></div>
	  <div class="panel-body">
	  	<div class="row">
		<div class="our-services-left">
		
		<p>Thanks for choosing Paintmen to give you a free quote! Please enter a few details about the location and project you want us to do for you, and we will get back to you within 24 hours.</p>
		<p>Or just send us a message if you have any questions you would like to ask!</p> 
		
		
		
		
		</div>
		<div style="float:left; width:auto; padding-left:20px; padding-right:20px;">
		  
		<form name="quote_form" method="post" action="request_quote.php">
		
		<div class="form-group">
		<label for="first_name" width="30">First Name: <font color="red">*</font></label>
		<input type="text" class="form-control" name="first_name" maxlength="50" size="30">
		</div>
		
		<div class="form-group">
		<label for="last_name">Last Name: <font color="red">*</font></label>
		<input type="text" class="form-control" name="last_name" maxlength="50" size="30">
		</div>
		
		<div class="form-group">
		<label for="phone_number">Phone Number: <font color="red">*</font></label>
		<input type="text" class="form-control" name="phone_number" maxlength="50" size="30">
		</div>

		<div class="form-group">		
		<label for="address">Address:</label>
		<input type="text" class="form-control" name="address" maxlength="50" size="30">
		</div>
		
		<div class="form-group">
		<label for="email">Email: <font color="red">*</font></label>
		<input type="text" class="form-control" name="email" maxlength="50" size="30">
		</div>
		
		<div class="form-group">
		<label for="info">Info or Project Details:</label>
		<textarea name="info" class="form-control" maxlength="200" rows="2" cols="30"></textarea>
		</div>
		
		<button type="submit" name="submit" class="btn btn-default" style="width: 220px">Submit</button>
		
		</form>
		</div>
        	</div>
	  </div>
	</div>
	
	
	
	
	
	
	
	</div> <!-- end page-content -->
	
	
	
	
	<!--
	<script language="javascript">
	var ht = screen.height;
	document.getElementById("page-content").style.height = ht+"px";
	</script>
	-->
	<!------------------------ End of Page Content --------------------------------------------------->
	

<?php include("footer.php"); ?>

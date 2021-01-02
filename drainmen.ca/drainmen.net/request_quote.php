<?php
function sendEmail()
{
if(isset($_POST['first_name']))
{

	$email_to = "kurt.paintmen@gmail.com";
	$email_subject = "Quote from paintmen.net";
	
	
	// check that required information has been submitted
	if( !isset($_POST['first_name']) || !isset($_POST['last_name']) ||
	    !isset($_POST['phone_number']) || !isset($_POST['address']) ||
	    !isset($_POST['email']) )
	{
		echo "The required information was not submitted.";
		return;
	}
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	$email_from = $_POST['email'];
	$info = $_POST['info'];
	
	
	// validate form information
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$string_exp = "/^[A-Za-z .'-]+$/";
	
	$error_message = '<b>There was one or more problems with your quote:</b><br />';
	
	if(!preg_match($string_exp, $first_name)) {
		$error_message .= 'The first name you entered does not appear to be valid.<br />'; }
	if(!preg_match($string_exp, $last_name)) {
		$error_message .= 'The last name you entered does not appear to be valid.<br />'; }
	if(!preg_match($email_exp, $email_from)) {
		$error_message .= 'The email address you entered does not appear to be valid.<br />'; }

	if(strlen($error_message) >60) {
		echo $error_message;
		echo '<br /><a href="contact.php#quote" class="btn btn-primary" style="float: right"; width:180px; align: center;">Try again</a>';
		return;
	}	
	
	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}
	
	// email body
	$email_message = "Email:";
	
	$email_message .= "First Name: ".clean_string($first_name)."\n";
	$email_message .= "Last Name: ".clean_string($last_name)."\n";
	$email_message .= "Phone Number: ".clean_string($phone_number)."\n";
	$email_message .= "Address: ".clean_string($address)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Info: ".clean_string($info)."\n";


	// email headers
	$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n".'X-Mailer: PHP/'.phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  
	
	echo "Thank you, we will be in contact with you within 24 hours for a quote!";

}
}//sendEmail()

include('header.php');
?>

<!------------------------ Page Content --------------------------------------------------->
	
	<div id="page-content-header">
	  <section class="header" id="page-header-title">
	    <div class="container">
		<h4 class="page-title">Information Sent</h1>
	    </div>
	  </section>
	</div>
	
	
	<div id="page-content" class="whitetoblue-background" style="padding-bottom:20px;">
	<div id="page-content-margin"><br/></div>	
	
	
	<div class="panel panel-main-content">
	  <div class="panel-heading"><h3 class="panel-title">Quote Received</h3></div>
	  <div class="panel-body">
	  	<div class="row">
		<div class="our-services-left">
		
		<? sendEmail(); ?>
		
		</div>
		<div class="our-services-right">
		  
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




<?

include('footer.php');

?>
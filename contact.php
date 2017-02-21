<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Candice N. Dexter | Web Designer & Developer | Laurel, Maryland</title>
	<meta name="description" content="Portfolio of Candice N. Dexter, Web Designer & Developer in Maryland">
	<meta name="author" content="Candice N. Dexter">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet" type="text/css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>

<body class="contact">
	<div id="container">
	  <div id="container_header">
		<div id="container_logo">
		  <h1>Candice N. Dexter</h1>
		</div><!-- end #container_logo-->
		<div id="container_nav">
		  <ul>
			<li><a href="index.html#top" class="menuright scroll">About</a></li>
			<li><a href="index.html#work" class="menuright scroll">Work</a></li>
			<li><a href="index.html#contact" class="scroll">Contact</a></li>
		  </ul>
		</div><!--end #container_nav-->
	  </div><!--end #container_header-->
		
	<div id="container_content">

	<div id="contact">
	<div id="contact_content">
		<h2>Contact Me</h2>
		  <?php
if(isset($_POST['email'])) {
     
    $email_to = "c@ndicendexter.com";
    $email_subject = "C@ndiceNDexter.com Inquiry";
     
    function died($error) {
        // your error code can go here
        echo "There were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors and try again.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('There appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here -->
 
Thank you for contacting me. I will respond to your email within 48 hours.
 
<?php
}
?>
			
		</div><!--end #contact_content-->
		</div><!--end #contact-->
	</div><!--end #container_content-->

	  <div id="footer">
		<div id="footer_content">&copy; 2013. All Rights Reserved.<br />Candice N. Dexter.
		</div><!--end #footer_content-->
	  </div><!--end #footer-->
	</div><!--end #container-->
	
</body>
</html>
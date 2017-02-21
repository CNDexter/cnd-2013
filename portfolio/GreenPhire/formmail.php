<?php
require_once "Mail.php";

$subj = $_REQUEST['subject'];
$subject = "GreenPhire.com Submission: ".$subj;
$email = $_REQUEST['email'] ;
$body = $_REQUEST['comments']."\n\n\n\n Phone: ".$_REQUEST['phone']
           ."\n Name: ". $_REQUEST['name']
           ."\n From: ". $email;

$from = $email;
$to = "info@greenphire.com";

$host = "localhost";
$port = "25";

$headers = array ('From' => $from, 'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port));

$mail = $smtp->send($to, $headers, $body);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>greenphire - ePayment and Communications Solutions</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="newgpcss.css" rel="stylesheet" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css" />
<script src="slideshow.js" type="text/javascript">
/***********************************************
* Ultimate Fade-In Slideshow (v1.51): (c) Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/
</script>
<script src="script.js" type="text/javascript">
http://javascript-array.com 
</script>
<link rel='icon' href='gpfavicon.ico' type='image/x-icon' /> 
<link rel='shortcut icon' href='gpfavicon.ico' type='image/xicon' />
</head>

<body>
<div id="superContainer">
 <div id="mod-id" class="mod">
 <span class="x1"><span class="x1a"></span></span>
 <span class="x2"><span class="x2a"></span></span>
   <div class="mod-content">
        <div class="aFilter"><div class="aFilter2">
	<div id="container">
		<div id="topbar"></div>
		<div id="topcontent">
			<div id="topleft"><script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages, 375, 287, 0, 3000, 1, "R")
 
</script></div>
			<div id="topright"><img src="images/logo3.png" alt="logo" /></div>
		</div>
		<div id="middlebar">
			<div id="middlebarmenu" class="menu">
			<ul id="sddm">
			<li><a href="index.html">home</a></li>
			<li><a href="about.html" 
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">about</a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="management.html">Management</a>
        <a href="board.html">Board of Directors</a>
        </div></li>
			<li><a href="products.html" 
        onmouseover="mopen('m2')" 
        onmouseout="mclosetime()">products</a>
        <div id="m2" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="clincard.html">ClinCard</a>
        <a href="referralcard.html">ReferralCard</a>
		<a href="ips.html">Investigator Payments</a>
        </div></li>
			<li><a href="news.html" 
        onmouseover="mopen('m3')" 
        onmouseout="mclosetime()">news</a>
        <div id="m3" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        
        <a href="conferences.html">Conferences</a>
        </div></li>
			<li><a href="contact.html" 
        onmouseover="mopen('m4')" 
        onmouseout="mclosetime()">contact</a>
        <div id="m4" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="contact_si.html">Sales Inquiry</a>
        <a href="contact_corpi.html">Corporate Inquiry</a>
		<a href="contact_cardi.html">Cardholder Inquiry</a>
        </div></li>
		</ul>
		</div>
		</div>
		<div id="middlecontent">
			<div id="middleleft" class="leftmenu">
			<p><ul><a href="contact_si.html">Sales Inquiry</a></ul>
			<ul><a href="contact_corpi.html">Corporate Inquiry</a></ul>
			<ul><a href="contact_cardi.html">Cardholder Inquiry</a></ul></p>
			</div>
			<div id="middleright">
	  <h1><p>Thank You. Your information has been sent.</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	  </h1>
	<!--
		<?php
		
			if (PEAR::isError($mail)) {
  			echo("<p>" . $mail->getMessage() . "</p>");
 			} else {
 			 echo("<p>Message successfully sent!</p>");
 			}
		?>
-->
</div>
			<div id="middleleftbottom" class="leftmenu">
			<a href="mailto:sales@greenphire.com"><img src="images/contactgreenphire2.png" alt="Contact greenphire for a demonstration." /></a>
			<a href="https://www.myclincard.com/" target="_blank"><img src="images/clincard.png" alt="Clincard Logo" /></a>
			</div>
		</div>
		<div id="bottombar" class="bottommenu">1725 Spruce Street, Suite 200 | Philadelphia, Pennsylvania 19103 | t 215.609.4378 | f 215.395.6121 | <a href="mailto:info@greenphire.com">info@greenphire.com</a></div>
	</div><div id="legal" class="smalltext">&copy;2009 GreenPhire LLC, All Rights Reserved.</div>
 </div></div>
 </div>
 </div>
</div><!--super container end-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-5135803-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>

<script src="http://static.getclicky.com/70369.js" type="text/javascript"></script>
</body>
</html>
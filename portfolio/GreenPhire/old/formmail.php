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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to greenphire</title>
<link href="style2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--

-->
</style>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/menu_over_1.gif','images/menu_up_2.gif','images/menu_up_3.gif','images/menu_up_4.gif','images/menu_up_5.gif')">
<div id="superContainer">
<div id="container">
  <div id="header">
    <div class="style1" id="menu-up-1">
      <div align="right">Client Login</div>
    </div>
	<div id="menu-up-4">
		<img src="images/tagline.gif" width="380" height="83" alt="">	</div>
       <div id="menu-up-3">
		<img src="images/logo.gif" width="150" height="83" alt="">	</div>
	<div id="menu-up-6"><img src="images/menu_up_1.gif" alt="Home" width="71" height="22" /><a href="about.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('About Us','','images/menu_up_2.gif',1)"><img src="images/menu_over_2.gif" alt="About Us" name="About Us" width="87" height="22" border="0" id="About Us" /></a><a href="clincard.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ClinCard','','images/menu_up_3.gif',1)"><img src="images/menu_over_3.gif" alt="ClinCard" name="ClinCard" width="83" height="22" border="0" id="ClinCard" /></a><a href="faq.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Faqs','','images/menu_up_4.gif',1)"><img src="images/menu_over_4.gif" alt="Faqs" name="Faqs" width="60" height="22" border="0" id="Faqs" /></a><a href="contact.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Contact Us','','images/menu_up_5.gif',1)"><img src="images/menu_over_5.gif" alt="Contact Us" name="Contact Us" width="79" height="22" border="0" id="Contact Us" /></a></div>
	
	<div id="menu-up-5"></div>

  <!-- end #header --></div>
  <div id="mainContent">
	<div id="bodyRight">
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
    <div id="bodyLeft"></div>

    </div>
  <div id="footer"  class="smallType">
    <p>1725 Spruce Street, Suite 200 | Philadelphia, Pennsylvania 19103 | t  215.609.4378 | f  215.395.6121 | <a href="mailto:info@greenphire.com">info@greenphire.com</a></p>
  <!-- end #footer --></div>
<!-- end #container --></div>
	<div id="legalRight" class="smallType">©2008 GreenPhire Inc All Rights Reserved </div>
    <div id="legalLeft" class="smallType"></div>
</div>


<script src="http://static.getclicky.com/70369.js" type="text/javascript"></script>

<noscript><p><img alt="Clicky" width="1" height="1" src="http://static.getclicky.com/70369-db7.gif" /></p></noscript>


</body>
</html>

<?php
//This is the header file.
$path='/portfolio/YMC/'
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Your Maui Condo :: <?=$title?></title>
<META NAME="description" CONTENT="">
<META NAME="keywords" CONTENT="">
<META NAME="author" CONTENT="Candice F."> 

<link href="<?=$path?>ymccss.css" rel="stylesheet" type="text/css" />
<link href="<?=$path?>gallerycss.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">

// Drummy's Random Image Script
// (C) 2006 Paul Voth, Drummy.org
// Please leave this copyright notice
// In the script if you're gonna use it :)

function get_random()
{

// Make sure that random()*X) has the correct
// number. The number of images defined below.
var ranNum= Math.floor(Math.random()*8);
return ranNum;
}
var whichImg=get_random();

function show_image() {

// Add your images here.
// Make sure that Array(X) has the number
// of images that you want to include
var img=new Array(8)
img[0]="<?=$path?>images/flowers/blueflower.png";
img[1]="<?=$path?>images/flowers/redflower.png";
img[2]="<?=$path?>images/flowers/pinkflower.png";
img[3]="<?=$path?>images/flowers/yellowflower.png";
img[4]="<?=$path?>images/flowers/orangeflower.png";
img[5]="<?=$path?>images/flowers/purpleflower.png";
img[6]="<?=$path?>images/flowers/dgreenflower.png";
img[7]="<?=$path?>images/flowers/lgreenflower.png";
 // Here the actual displaying of the image is taking place.
document.write("<img src='");
document.write(img[whichImg]);
document.write("' border='0' />");
}
</script>
</head>

<body>
<div id="container">
 <div id="header">
	<div id="headerleft"><script language="JavaScript">show_image();</script></div>
	<div id="headerright"><img src="<?=$path?>images/YMCcorner.png" align="right"></div>
	<div id="headermenu"><img src="<?=$path?>images/bluebarside.png" align="left"></div>
 </div>
 <div id="content">
  <div id="contentleft">
  <a href="<?=$path?>index.php"><img src="<?=$path?>images/mauikamaole.png" alt="Maui Kamaole"></a><br>
  &nbsp;&nbsp;<b>A-112</b><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$path?>a112/about.php">About A-112</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mauiownercondos.com/calendar/calendar.php?id=23">Availability calendar</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$path?>a112/photos.php">Photos</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$path?>a112/rates.php">Rates</a><br><br>
  &nbsp;&nbsp;<b>J-205</b><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$path?>j205/about.php">About J-205</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mauiownercondos.com/calendar/calendar.php?id=70">Availability calendar</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$path?>j205/photos.php">Photos</a><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$path?>j205/rates.php">Rates</a><br><br>
  &nbsp;&nbsp;<a href="<?=$path?>policies.php"><b>Policies</b></a><br>
  &nbsp;&nbsp;<a href="<?=$path?>contact.php"><b>Contact</b></a><br>
  &nbsp;&nbsp;<a href="<?=$path?>index.php"><b>Home</b></a>
  </div>
  <div id="contentright">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>EOOLT 2019 &mdash; 9th International Workshop on Equation-Based
Object-Oriented Modeling Languages and Tools</title>
<meta name="description" content="EOOLT 2019 � 9th International Workshop on Equation-Based Object-Oriented Modeling Languages and Tools"> 
<meta name="keywords" content="EOO OO Workshop Modelica VHDL-AMS gPROMS model differential algegraic equations DAE equation object oriented languages"> 
<meta content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="main.css" type="text/css" media="screen, projection">
</head>
<body>

<!-- LINKS - MENU SECTION -->
<img src="top-ACM-Sigplan.jpg" width=760 hight=70>
<div class="menu"><li><a href="../index.html">home</a></li><li><a href="index.php?id=main">main</a></li><li><a href="index.php?id=cfp">call for papers</a></li><li><a href="index.php?id=org">organization</a></li><li><a href="index.php?id=pc">PC</a></li><li><a href="index.php?id=attending">attending</a></li><li><a href="index.php?id=program">final program</a></li><!--<li><a href="index.php?id=cultural">cultural</a></li><li><a href="index.php?id=photos">photos</a></li>--></div>

<table border=0 cellpadding=0 cellspacing=0 >
<tr><td width=135 valign=top align=left class="submenu">
<!-- NEWS SECTION FOR UPDATES -->
<h2>News</h2><hr>

<p>
   
<!--<p><b>May 06</b><br>   
<a href= "http://dl.acm.org/citation.cfm?id=2904081&picked=prox">EOOLT 2016 Proceedings</a> available
-->

<p><b>October 29</b><br>
Final Program is now available <a href="index.php?id=program">here.
</p>

<p><b>October 8</b><br>
Registration is now open! Find out more about  <a href="index.php?id=attending">attending</a> the workshop.
</p>

<p><b>October 1</b><br>
Preliminary program of the workshop can be found  <a href="index.php?id=program">here.</a> 
</p>

<p><b>September 5</b><br>
The "in-cooperation status" with SIGPLAN is approved now. Please use for camera-ready version of your submission one of the following templates: 
<a href="https://www.acm.org/binaries/content/assets/publications/word_style/interim-template-style/interim-layout-.docx">Word users</a>, 
<a href="https://www.acm.org/binaries/content/assets/publications/consolidated-tex-template/acmart-master.zip">Latex users</a>
These are the same templates mentioned earlier on the EOOLT 2019 web page.
For more information about templates, see <a href="http://www.acm.org/publications/proceedings-template">ACM SigConf Templates</a>.
For information about ACM Author rights Policies, please see <a href="http://www.acm.org/publications/icps-instructions">ACM instructions for authors</a>.
</p>

<p><b>August 5</b><br>
Please note that the submission deadline was extended by three weeks! <br>The <a href="index.php?id=cfp">new deadline</a> is <b>August 26</b></a>.
</p>

<p><b>July 11</b><br>
EOOLT 2019 has now the official "in-cooperation status" of ACM. All accepted papers will be published in the Scopus-indexed <a href="http://dl.acm.org/">ACM Digital Library</a>.
<img src="ACM-In-Cooperation_extrasmall.gif"><br>
</p>
<p>
The presently valid ACM SigConf Templates will be provided soon on this wegpage. Meanwhile you can use <a href="http://www.acm.org/publications/proceedings-template">ACM SigConf Templates</a> for your submission.
</p>

<p><b>June 26</b><br>
EOOLT 2019 is initialized at <a href="https://easychair.org/conferences/?conf=eoolt2019">EasyChair Conference Tool</a>.
</p>
<!--
<p>
Registration for the workshop will be open after author notification.
</p>
-->

<p><b>June 14</b><br>
We plan to published all accepted papers in the Scopus-indexed <a href="http://dl.acm.org/">ACM Digital Library</a>. 
</p>
<p>
An application for organising EOOLT 2019 in cooperation with ACM SIGPLAN was sent to ACM.
</p>

<p><b>June 6</b><br>
Venue, Social Program, and Hotel information is available.
</p>

<p><b>March 8</b><br>
<a href="EOOLT2019.pdf">Poster</a> for advertisement and <a href="index.php?id=cfp"> submission information</a> is available. 
</p>

<p><b>February 21</b><br>
The next EOOLT workshop will take place in Berlin, Germany, on <b>November 5</b>.
</p>

<td valign=top align=left>


<!-- PHP - MAIN TEXT SECTION -->
<div class="maintext">
<p>
<?php
	$id=$_GET['id']; 
	switch($id)
	{
		case "main":
		include("main.php");
		break;
		case "cfp":
		include("cfp.php");
		break;
		case "org":
		include("org.php");
		break;
		case "pc":
		include("pc.php");
		break;		
        case "attending":
		include("attending.php");
		break;
		case "program":
		include("program.php");
		break;
/*
		case "accomodation":
		include("accomodation.php");
		break;
		case "cultural":
		include("cultural.php");
		break;
		case "photos":
		include("photos.php");
		break;
*/
		default:
		require ("main.php");
	}
?>
<p>
</div>

</td></tr></table>




</body>
</html>

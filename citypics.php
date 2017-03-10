<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Travel Portal
Version    : 1.0
Released   : 20070618
Description: A two-column, fixed-width template.

-->
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PNN El Cocuy</title>
<meta name="keywords" content="" />
<meta name="description" content="Pictures of the cities El Cocuy and Guican that are near Parque Nacional Natural El Cocuy in the Sierra Nevada of Colombia, South America." />
<link href="default.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="resources/fancy.css" />

<script type="text/javascript" src="js/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.0.0.js"></script>
	
	<script type="text/javascript">
	
		$(function(){
		
			$(".photo-link").fancybox({ 'zoomSpeedIn': 500, 'zoomSpeedOut': 500, 'overlayShow': true }); 
		
		});
	
	</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29100382-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>


<body>
<div id="page">
	<div id="sidebar">
		<div id="logo">
			<h1><a href="/">PNN El Cocuy</a></h1>
			<h2><a href="/">The Best Kept Secret Of Colombia</a></h2>
		</div>
		<!-- end header -->
		<div id="menu">
			<ul>
				<li class="first"><a href="/">Home</a></li>
				<li><a href="/alltheinfo/">All The Info</a></li>
				<li><a href="/maps.html">Maps</a></li>
				<li><a href="/pictures.html">Pictures</a></li>
				<li><a href="/faq.html">FAQ</a></li>
				<li><a href="/about.html">About</a></li>
			</ul>
		</div>
		<!-- end menu -->
		<div id="login">
			<div align="center">
				<a href="http://www.languageconvo.com" target="_blank"><img src="/images/tallbanner.png" /></a>
			</div>
		</div>

	</div>
	<!-- end sidebar -->
	<div id="content">
		<div><img src="/images/img08.jpg" alt="" width="740" height="220" /></div>
		<div class="boxed">
			<h1 class="title2">Parque Nacional Natural El Cocuy<br/><font size="5">Pictures / El Cocuy & Guican</font></h1>
			<br>
			<?php
		
				/* settings */
				$image_dir = 'images/picgallery/city/';
				$per_column = 6;
		
		
				/* step one:  read directory, make array of files */
				if ($handle = opendir($image_dir)) {
					while (false !== ($file = readdir($handle))) 
					{
						if ($file != '.' && $file != '..') 
						{
							if(strstr($file,'-thumb'))
							{
								$files[] = $file;
							}
						}
					}
					closedir($handle);
				}
		
				/* step two: loop through, format gallery */
				if(count($files))
				{
					foreach($files as $file)
					{
						$count++;
						echo '<a class="photo-link" rel="one-big-group" href="',$image_dir,str_replace('-thumb','',$file),'"><img src="',$image_dir,$file,'" width="100" height="100" /></a>';
						if($count % $per_column == 0) { echo '<div class="clear"></div>'; }
					}
				}
				else
				{
					echo '<p>There are no images in this gallery.</p>';
				}
		
			?>

		</div>

	</div>
	<!-- end content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
	<p id="legal">Copyright &copy; 2010 John Aitchison. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	<p id="links"></p>
</div>
</body>
</html>

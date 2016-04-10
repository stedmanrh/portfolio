<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Stedman Halliday, Christian Babcock">
	<meta name="description" content="Blue Sky Energy is a leader in utility and commercial solar installation in the state of New Mexico.">
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0" />
	<script>
		if(window.matchMedia("(max-width: 320px)").matches){
		document.getElementById("viewport").setAttribute("content", "width=768px");
		document.getElementById("viewport").setAttribute("content", "initial-scale=0.417");
		}
		if(window.matchMedia("(max-width: 480px)").matches){
		document.getElementById("viewport").setAttribute("content", "width=768px");
		document.getElementById("viewport").setAttribute("content", "initial-scale=0.625");
		}
	</script>
	<title>Blue Sky Energy NM &middot; Contact</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" media="screen">
	<link rel="stylesheet" href="css/styles.css" media="screen">
	<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
	<style type="text/css">
		footer{
				position:static;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="navbar navbar-inverse span12 hidden-desktop">
				<div class="navbar-inner">
					<div class="logotype span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/logotype.png" alt="alternate logo"><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a class="dark" href="/sites/bse_nm/">new mexico</a></li>
							<li class="divider"></li>
							<li><a href="http://www.ppcsolar.com" target="_blank">ppc solar</a></li>
							<li><a href="http://www.blue-sky-energy.com" target="_blank">california</a></li>
						</ul>
					</div>
				    <ul class="nav">
				      <li class="span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">about</a>
					  	<ul class="dropdown-menu">
					  		<li><a href="/sites/bse_nm/">who we are</a></li>
					  		<li><a href="financing.html">structured financing</a></li>
					  		<li><a href="bios.html">bios</a></li>
					  		<li class="divider"></li>
					  		<li><a class="active dark" href="#">contact</a></li>
					  	</ul>
					  </li>
				      <li class="span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">utility</a>
				      	<ul class="dropdown-menu">
				      		<li><a href="utility.html">overview</a></li>
				      		<li><a href="utility/gallery.html">gallery</a></li>
				      	</ul>
				      </li>
				      <li class="span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">commercial</a>
				      	<ul class="dropdown-menu">
				      		<li><a href="commercial.html">overview</a></li>
				      		<li><a href="commercial/gallery.html">gallery</a></li>
				      	</ul>
				      </li>
				    </ul>
				</div>
			</div><!-- /navbar -->
		</div>
		<div class="row">
			<div class="span3 visible-desktop" id="sidebar">
				<a href="/sites/bse_nm/"><img src="images/logo.png" id="logo" alt="logo"></a>
				<h1 id="current"><a class="light" href="/sites/bse_nm/">new mexico</a></h1>
				<nav>
					<h2><a href="/sites/bse_nm/">about</a></h2>
					<h2><a href="utility.html">utility</a></h2>
					<h2><a href="commercial.html">commercial</a></h2>
					<h2 class="light"><a href="#">contact</a></h2>
				</nav><br>
				<h1><a href="http://www.ppcsolar.com" target="_blank">ppc solar</a></h1>
				<h1><a href="http://www.blue-sky-energy.com" target="_blank">california</a></h1>
			</div><!-- /sidebar -->
			<div class="span9" id="content">
				<div class="row">
					<img src="images/nm_header1.jpg" class="span9" id="header" alt="solar panel array">
				</div><!-- /header -->
				<div class="row">
					<form class="span4" name="contact" method="post" action="contact.php">
						<h1>your info</h1>
						<fieldset>
							<label><i class="icon-user icon"></i>name</label>
							<input type="text" name="name" id="name" required placeholder="John Smith">
		                    <label><i class="icon-envelope icon"></i>email</label>
							<input type="email" name="email" id="email" required placeholder="jsmith@mailhost.com">
							<label>phone</label>
							<input type="tel" name="phone" id="phone" required pattern="[\+\s?]{0,2}[1]?[\.\-\s]{0,3}\(?[2-9][\d]{2}\)?[\.\-\s]{0,3}[2-9][\d]{2}[\.\-\s]{0,3}[\d]{4}" placeholder="310. 422. 2908"-->
		                    <label><i class="icon-comment icon"></i>message</label>
		               	 	<textarea name="message" id="message" required maxlength="1000" placeholder="Your message here."></textarea>
						</fieldset>
		            	<fieldset class="submit">
		                	<button type="submit" name="submit" class="btn btn-warning">Submit</button>
						</fieldset>
                		<?php
						    $name = $_POST['name'];
							$email = $_POST['email'];
						    $phone = $_POST['phone'];
						    $message = $_POST['message'];
						    $from = 'From: '.$email."\r\n".
							'Reply-To: '.$email;  
						    $to = 'g.rochlin@blue-sky-energy.com'; 
						    $subject = 'Blue Sky Energy New Mexico Contact Form';
							
							$body = "Client: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
							
							if (isset($_POST['submit'])) {
						    if (mail ($to, $subject, $body, $from)) { 
						        echo '<p>Your message has been sent!</p>';
						    }
							else { 
						        echo '<p>Something went wrong, please try again!</p>'; 
						    	}
							}
						?><!-- /php -->
					</form>
					<div class="span4 offset1" id="contact">
						<h1>our info</h1>
						<strong>Gary Rochlin</strong> / Managing Partner<br>
	            		<a id="email" target="_blank" href="mailto:g.rochlin@blue-sky-energy.com">g.rochlin@blue-sky-energy.com</a><br>
	            		tel &nbsp;  310. 422. 2908<br>
	            		fax &nbsp;  310. 459. 2706<br><br>
						<strong>Daniel Wienman</strong> / Partner<br>
	            		<a id="email" target="_blank" href="mailto:dan@ppcsolar.com">dan@ppcsolar.com</a><br>
                        tel &nbsp;  575. 737. 5896<br>
	            		fax &nbsp;  575. 737. 3024<br><br>
	            		<strong>Adam S. Baker</strong> / Partner<br>
	            		<a id="email" target="_blank" href="mailto:abaker@bakerlawoffice.net">abaker@bakerlawoffice.net</a><br>
	            		tel &nbsp;  575. 737. 5896<br>
	            		fax &nbsp;  575. 737. 3024<br><br>
	            		<strong>Brett Conrad</strong> / Partner<br>
	            		<a id="email" target="_blank" href="mailto:bconrad@longboardcapital.com">bconrad@longboardcapital.com</a><br>
	            		tel &nbsp;  310. 422. 9423
					</div><!-- /contact -->
				</div><!-- /content -->
			</div>
		</div>
	</div><!-- /container -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="span3">
					<h3><a href="/sites/bse_nm/">about</a></h3>
					<a href="/sites/bse_nm/">who we are</a><br>
					<a href="financing.html">structured financing</a><br>
					<a href="bios.html">bios</a>
				</div><!-- /about -->
				<div class="span3">
					<h3><a href="utility.html">utility</a></h3>
					<a href="utility.html">overview</a><br>
					<a href="utility/gallery.html">gallery</a><br>
				</div><!-- /utility -->
				<div class="span3">
					<h3><a href="commercial.html">commercial</a></h3>
					<a href="commercial.html">overview</a><br>
					<a href="commercial/gallery.html">gallery</a></h3><br>
				</div><!-- /commercial -->
				<div class="span3">
					<h3><a href="#">contact</a></h3>
            		<i class="icon-envelope icon"></i><a id="email" target="_blank" href="mailto:info@blueskyenergy.biz?subject=BSE New Mexico Inquiry">info@blueskyenergy.biz</a><br>
            		tel &nbsp; 310. 422. 2908<br>
            		fax &nbsp; 310. 459. 2706<br>
            		<br>&copy;2013 Blue Sky Energy
				</div><!-- /contact -->
			</div><!-- /sitemap -->
		</div>
	</footer>

	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {  
            $('.dropdown-toggle').dropdown();  
        });
	</script>
</body>
</html>
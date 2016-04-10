<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Stedman Halliday, Christian Babcock">
	<meta name="description" content="Blue Sky Energy is a leader in residential and commercial solar installation in the state of California.">
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
	<title>Blue Sky Energy CA &middot; Contact</title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-responsive.min.css" media="screen">
	<link rel="stylesheet" href="/css/styles.css" media="screen">
	<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
	<!--style type="text/css">
		footer{
				position:static;
		}
	</style-->
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="navbar span12 hidden-desktop">
				<div class="navbar-inner">
					<div class="logotype span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="/images/logotype.png" alt="alternate logo"><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a class="dark" href="/">california</a></li>
							<li class="divider"></li>
							<li><a href="http://www.blueskyenergy.biz" target="_blank">new mexico</a></li>
						</ul>
					</div>
				    <ul class="nav">
				      <li class="span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">about</a>
					  	<ul class="dropdown-menu">
					  		<li><a href="/">who we are</a></li>
					  		<li><a href="/bios.html">bios</a></li>
					  		<li><a href="/efficiency.html">energy efficiency</a></li>
					  		<li><a href="/terminology.html">terminology</a></li>
					  		<li class="divider"></li>
					  		<li><a class="active dark" href="#">contact</a></li>
					  	</ul>
					  </li>
				      <li class="span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">residential</a>
				      	<ul class="dropdown-menu">
				      		<li><a href="/residential.html">overview</a></li>
				      		<li><a href="/residential/gallery.html">gallery</a></li>
				      		<li><a href="/residential/testimonials.html">testimonials</a></li>
				      	</ul>
				      </li>
				      <li class="span3 dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">commercial</a>
				      	<ul class="dropdown-menu">
				      		<li><a href="/commercial.html">overview</a></li>
				      		<li><a href="/commercial/gallery.html">gallery</a></li>
				      		<li><a href="/commercial/testimonials.html">testimonials</a></li>
				      	</ul>
				      </li>
				    </ul>
				</div>
			</div><!-- /navbar -->
		</div>
		<div class="row">
			<div class="span3 visible-desktop" id="sidebar">
				<a href="/"><img src="/images/logo.png" id="logo" alt="logo"></a>
				<h1 id="current"><a class="light" href="/">california</a></h1>
				<nav>
					<h2><a href="/">about</a></h2>
					<h2><a href="/residential.html">residential</a></h2>
					<h2><a href="/commercial.html">commercial</a></h2>
					<h2 class="light"><a href="#">contact</a></h2>
				</nav><br>
                <br>
				<h1><a href="http://www.blueskyenergy.biz" target="_blank">new mexico</a></h1>
			</div><!-- /sidebar -->
			<div class="span9" id="content">
				<div class="row">
					<img src="/images/ca_header01.jpg" class="span9" id="header" alt="solar installation">
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
		                	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</fieldset>
                		<?php
						    $name = $_POST['name'];
							$email = $_POST['email'];
						    $phone = $_POST['phone'];
						    $message = $_POST['message'];
						    $from = 'From: '.$email."\r\n".
							'Reply-To: '.$email;  
						    $to = 'info@blue-sky-energy.com'; 
						    $subject = 'Blue Sky Energy California Contact Form';
							
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
	            		tel &nbsp;  310. 422. 2908<br><br>
	            		<strong>Matthew Green</strong> / Project Manager<br>
	            		<a id="email" target="_blank" href="mailto:m.green@blue-sky-energy.com">m.green@blue-sky-energy.com</a><br>
	            		tel &nbsp;  310. 699. 1653
					</div><!-- /contact -->
				</div><!-- /content -->
			</div>
		</div>
	</div><!-- /container -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="span3">
					<h3><a href="/">about</a></h3>
					<a href="/">who we are</a><br>
					<a href="/bios.html">bios</a><br>
					<a href="/efficiency.html">energy efficiency</a><br>
					<a href="/terminology.html">terminology</a>
				</div><!-- /about -->
				<div class="span3">
					<h3><a href="/residential.html">residential</a></h3>
					<a href="/residential.html">overview</a><br>
					<a href="/residential/gallery.html">gallery</a><br>
					<a href="/residential/testimonials.html">testimonials</a>
				</div><!-- /residential -->
				<div class="span3">
					<h3><a href="/commercial.html">commercial</a></h3>
					<a href="/commercial.html">overview</a><br>
					<a href="/commercial/gallery.html">gallery</a></h3><br>
					<a href="/commercial/testimonials.html">testimonials</a>
				</div><!-- /commercial -->
				<div class="span3">
					<h3><a href="#">contact</a></h3>
            		<i class="icon-envelope icon"></i><a id="email" target="_blank" href="mailto:info@blue-sky-energy.com?subject=Blue Sky Energy CA Inquiry">info@blue-sky-energy.com</a><br>
            		<img class="icon-phone icon" src="/images/phone.png" alt="">tel &nbsp;  310. 422. 2908<br>
            		<i class="icon-print icon"></i>fax &nbsp;  310. 459. 2706<br>
            		<br><small>&copy;2013 Blue Sky Energy</small>
				</div><!-- /contact -->
			</div><!-- /sitemap -->
		</div>
	</footer>

	<script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {  
            $('.dropdown-toggle').dropdown();  
        });
	</script>
</body>
</html>
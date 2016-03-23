<!doctype html>

<html lang="en">
<head>
	<title>CalArts T-Shirt Show 2014</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="CalArts Graphic Design presents the 2014 T-Shirt Show">
	
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">
</head>

<body>
	<div class="container">
		<header>
			<div class="module">
				<h1>CalArts</h1>
				<h1>Graphic Design</h1>
				<h1>Presents</h1>
			</div>
			<div class="module" id="info">
				<h2>CalArts<br>T-Shirt<br>Show</h2>
				<h3>Feb. 13</h3>
				<h3>Cafe @ 8pm</h3>
				<h4>Cash Only</h4>
			</div>
		</header>
		<section class="tees">
			<?php
				include "credits.php";
				for ($i=1; $i<=25; $i++) {
					$wht_path = "\"img/tees/wht/{$i}.png\"";
					$crm_path = "\"img/tees/crm/{$i}.png\"";
					$ylw_path = "\"img/tees/ylw/{$i}.png\"";
					$wht_lg_path = "\"img/tees/large/wht/{$i}.png\"";
					$crm_lg_path = "\"img/tees/large/crm/{$i}.png\"";
					$ylw_lg_path = "\"img/tees/large/ylw/{$i}.png\"";
					$index_1 = 3*$i-2;
					$index_2 = 3*$i-1;
					$index_3 = 3*$i;
					$name_1 = $designers[$index_1];
					$name_2 = $designers[$index_2];
					$name_3 = $designers[$index_3];
					echo ('						
						<div class="module">
							<img src=' . $wht_path . '>
							<a href=' . $wht_lg_path . ' target="_blank"><div class="credit"><h3>' . $name_1  . '</h3></div></a>
						</div>
						<div class="module">
							<img src=' . $ylw_path . '>
							<a href=' . $ylw_lg_path . ' target="_blank"><div class="credit"><h3>' . $name_3  . '</h3></div></a>
						</div>						
					');
					if ($i != 25)
						echo ('
						<div class="module">
							<img src=' . $crm_path . '>
							<a href=' . $crm_lg_path . ' target="_blank"><div class="credit"><h3>' . $name_2  . '</h3></div></a>
						</div>				
					');}
			?>
			<div class="module" id="notes">
				<h4>Notes</h4>
				<h4>Links</h4>
				<p><a href="http://calarts.edu" target="_blank">CalArts</a> &middot; <a href="http://design.calarts.edu" target="_blank">Design Program</a></p>
				<h4>Credits</h4>
				<p><strong>Event Coordination</strong><br><a href="http://angelabac.com/" target="_blank">Angela Bac</a> &middot; <a href="http://christineshen.com/" target="_blank">Christine Shen</a> &middot; Jessie Zo</p>
				<p><strong>Promotional Design</strong><br><a href="http://christineshen.com/" target="_blank">Christine Shen</a> &middot; Brian Thompsen &middot; <a href="http://mallorystrongdesign.viewbook.com" target="_blank">Mallory Strong</a></p>
				<p><strong>Website Design</strong><br><a href="http://stedmanhalliday.com" target="_blank">Stedman Halliday</a> &middot; Brian Thompsen</p>
			</div>
		</section>
	</div>
	<footer><span><strong>Special Thanks</strong><br>Hyun Soo Cho, Cris Hernandez, Sohee Kim, and Tracy Kim<span><br><small>&copy;2014 CalArts Design Program</small></footer>
</body>
</html>
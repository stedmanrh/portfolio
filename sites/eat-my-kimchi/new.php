<!doctype html>
<html lang="en">
<head>
	<title>Eat My Kimchi</title>

	<!-- images -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="author" content="Stedman Halliday">
	<meta name="description" content="Eat My Kimchi is a platform for Korean women to say out loud whatever they want to say without being judged by men.">

	<!-- stylesheets -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">

	<!-- libraries -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
</head>

<body>
    <?php include "header.html"; ?>
    <main class="compose">
        <div class="posts container single">
			<h2 class="page-title">submit a new post</h2>
			<div class="row cf">
				<div class="edit">
					<a title="enlarge font" class="bigger font" href="javascript: void(0)"><img src="img/bigger.svg" /></a>
					<a title="reduce font" class="smaller font" href="javascript: void(0)"><img src="img/smaller.svg" /></a>
				</div>
	            <?php include "post.html";
				include "nutrition.html"; ?>
			</div>
        </div>
    </main>
</body>
<script type="text/javascript" src="js/compose.js"></script>

</html>

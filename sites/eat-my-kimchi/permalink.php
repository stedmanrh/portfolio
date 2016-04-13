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
			<h2 class="page-title">view post</h2>
			<div class="row cf">
	            <?php include "nutrition.html";
				include "post.html"; ?>
				<div class="comments">
					<h2>replies</h2>
					<table class="comment-table">
						<tr>
							<td class="comment-time">10:05 AM</td>
							<td class="comment">It makes me really sad that women are only valued for their looks.</td>
						</tr>
						<tr>
							<td class="comment-time">11:36 AM</td>
							<td class="comment">It's time to end this double standard.</td>
						</tr>
					</table>
					<textarea class="author" maxlength="140" placeholder="Write a new comment..."></textarea>
			        <a class="submit" href="javascript: void(0)">post</a>
				</div>
			</div>
        </div>
    </main>
</body>
<script type="text/javascript" src="js/postObjects.js"></script>
<script type="text/javascript" src="js/posts.js"></script>
<script type="text/javascript" src="js/permalink.js"></script>

</html>

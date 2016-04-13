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
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">

	<!-- libraries -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
</head>

<body>
    <?php include "header.html"; ?>
    <main class="index">
        <div class="posts container">
            <div class="row cf">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        include "post.html";
                    }
                ?>
            </div>
        </div>
    </main>
    <footer class="container">
        <a class="postArchive" href="archive.php">read past statements</a>
        <a class="newPost" href="new.php">make your statement</a>
    </footer>
</body>
<script type="text/javascript" src="js/postObjects.js"></script>
<script type="text/javascript" src="js/posts.js"></script>

</html>

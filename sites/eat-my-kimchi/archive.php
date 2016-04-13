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
    <main class="archive">
        <div class="posts container">
            <div class="page-title">
                <h2>Post Archive</h2>
                <div class="sort">
                    <strong>sort by</strong>
                    <select name="sort" value="time">
                      <option value="time" selected>Freshness</option>
                      <option value="likes">Likes</option>
                    </select>
                </div>
            </div>
            <div class="row cf">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        include "post.html";
                    }
                ?>
            </div>
            <div class="row cf">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        include "post.html";
                    }
                ?>
            </div>
        </div>
    </main>
    <div class="pagination container">
        <a href="#" class="arrow prev"><img src="img/l-arrow.svg" /></a>
        <a href="#" class="arrow next"><img src="img/r-arrow.svg" /></a>
    </div>
</body>
<script type="text/javascript" src="js/postObjects.js"></script>
<script type="text/javascript" src="js/posts.js"></script>
<script type="text/javascript" src="js/sortPosts.js"></script>

</html>

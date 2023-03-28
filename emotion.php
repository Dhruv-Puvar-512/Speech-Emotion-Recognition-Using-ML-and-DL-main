<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title></title>
	<link rel="stylesheet" href="css/style2.css" />
	<link rel="stylesheet" href="emotion.css" /> 
</head>

<body>
	<header class="fixed-top py-3">
    <div class="container d-flex align-items-center justify-content-between">
        <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>
        <nav class="nav">
            <a href="index.php" class="active">Home</a>
            <a href="about.php">about</a>
			<a href="contact.php">Contact Us</a>
			<a href="logout.php">Logout </a>
        </nav>
    </div>
</header>
	<section class="footer" id="hi">
		<div class="divwrap">
			<div class="wrap1"> <img src="https://www.meaningcloud.com/wp-content/uploads/2019/11/vector-2.png" alt="" width="100%" height="500" class="d-inline-block align-text-top" /> </div>
			<div class="wrap2">
				<div class="wrap2div1">
					<h3>
                     SPEECH EMOTION RECOGNITION 
                  </h3>
					<form class="form" action="">
						<p id="name">NAME
							<input type="text" name="name" class="name" required placeholder="enter the name" /> EMAIL
							<input placeholder="e-mail" type="email" name="email" class="email" required /> </p>
						<p id="browse"> ♫ ADD AUDIO FILE
							<input placeholder="BROWSE" type="file" value="browse" class="browse" required /> 
						</p>
						<p id="submit">
						<input type="submit" value="ANALYZE" id="dhruv" />
						</p>
				</div>
				<div class="wrap2div2">
					<span> <img  id="happy" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ2eb6EFGDpHl_e73NnODsdGqrY5WP5ja-WA&usqp=CAU" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
					<span> <img  id="sad" src="https://icon2.cleanpng.com/20180404/vvq/kisspng-emoji-emoticon-computer-icons-sad-emoji-5ac49d37314386.6815534115228347432018.jpg" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
					<span> <img  id="angry" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgwwYBnfS0G_uZdmNkl2oWJfap3fn9A8UbGw&usqp=CAU" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
					<span> <img  id="disgust" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvOANi_bZVKU14CRkw1D13icbn7aqaxksTUA&usqp=CAU" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
                    <br>
                    <span> <img  id="surprise" src="https://e7.pngegg.com/pngimages/914/880/png-clipart-yellow-and-blue-emoji-illustration-emoji-screaming-sticker-iphone-fear-emoji-smiley-sticker.png" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
					<span> <img  id="neutral" src="https://megapng.com/images/bt/neutral-face-12.png" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
					<span> <img  id="calm" src="https://img.favpng.com/25/8/25/emoji-domain-emoticon-smiley-png-favpng-GHPNSWJuqBUsJsak3Ug2CD901.jpg" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
					<span> <img  id="fear" src="https://esquilo.io/png/thumb/7GwBOYjFAt8vFT0-Gradient-Scared-Emoji-PNG-Clipart.png" alt="" width="60" height="60" class="d-inline-block align-text-top"> </span>
                    <h2 id="wrt"></h2>                 
                </div>
 
            </div>

		</div>
		<div class="container">
        <div class="d-flex flex-wrap justify-content-center text-center text-sm-start">
        <div class="credit"> created by <span>SGP </span> | Group- 33  </div>
    </div>
	</section>
	
	<footer> <a href="#">FAQ</a> <a href="#">Terms and Policy</a> <a href="#">About us</a> <a href="#">Contact us</a> <a href="#" class="copy"> &#169;|SGP 2022</a> </footer>
<script src="js/script.js"></script>
<script src="emotion.js"></script>
</body>


</html>
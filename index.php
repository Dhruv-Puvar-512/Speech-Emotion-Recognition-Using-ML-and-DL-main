<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SER </title>

    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
    
<!-- header section starts -->

<header class="fixed-top py-3">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo">Speech Emotion Recognition</a>
        <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>
        <nav class="nav">
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
			<a href="contact.php">Contact Us</a>
            <a href="https://github.com/Achyut-Krishna/Speech-Emotion-Recognition-using-ML-and-DL.git">Github</a>
            <a href="stats.php">DataSet</a>
            <a href="logout.php"><?php echo $user_data['user_name']; ?></a>
        </nav>
    </div>

</header>

<!-- header section end-->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center pt-5">

            <div class="col-md-6">
                <img src="images/home.jpg" class="w-100" alt="">
            </div>

            <div class="col-md-6 content text-center text-md-start pl-md-5">
                <h3>Speech Emotion Recognition System</h3>
				<span>As Human beings﻿ Speech is amongst the most natural ways to express ourselves. We define an SER system as a collecti9on of methodologies that process and classify speech signals to detect emotions embedded in them</span>
				<h3> </h3>
				<button type="button" " class="link-btn" onclick="location.href = 'emotion.php'">Get Started</button>

			  
            </div>
			<section class="footer">
			<div class="container">
			<div class="d-flex flex-wrap justify-content-center text-center text-sm-start">
			<div class="credit"> created by <span>SGP </span> | Group- 33  </div> 
			</div>
			</section>	
        </div>

    </div>
	

</section>

<!-- home section ends -->
<!-- footer section starts  -->


<!-- footer section ends -->
<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>
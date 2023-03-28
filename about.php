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
    <title>SER_ABOuT</title>

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
            <a href="index.php" class="active">home</a>
			<a href="logout.php"><?php echo $user_data['user_name']; ?></a>			
        </nav>
    </div>
</header>

<!-- header section end-->
<!-- about section starts  -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center flex-wrap-reverse">

            <div class="col-md-6 content">
                <h3>What SER System?</h3>
                <p>Speech Emotion Recognition System, abbreviated as SER System, is the act of attempting to recognize human emotion and affective states from speech.</p>
				<p>This is capitalizing on the fact that voice often reflects underlying emotion through tone and pitch. The speech emotion recognition system uses audio data.</p>
				<p>It takes a part of speech as input and then determines what emotions the speaker is speaking.</p>
                <a href="#blogs" class="link-btn">learn more</a>
            </div>

            <div class="col-md-6">
			<br><br><br><br><br><br><br>
                <img src="images/voice-recognition-svgrepo-com.svg" class="w-100" alt="">
            </div>

        </div>

    </div>

</section>

<!-- about section ends -->
<!-- prevent section starts  -->

<section class="prevent" id="prevent">

    <h1 class="heading"> 8 Emotions <span>Classified </span> </h1>

    <div class="container">

        <div class="d-flex flex-wrap justify-content-center">

            <div class="box p-4 m-2">
                <img src="images/nuetral.png" alt="">
                <h3>Neutral</h3>
                <p>Feeling a lack of preference one way or the other.</p>
            </div>

            <div class="box p-4 m-2">
                <img src="images/calm.png" alt="">
                <h3>Calm</h3>
                <p>Not showing or feeling nervousness, anger, or other strong emotions.</p>
            </div>

            <div class="box p-4 m-2">
                <img src="images/happy.png" alt="">
                <h3>Happy</h3>
                <p>Happy is feeling or showing pleasure or contentment</p>
            </div>

            <div class="box p-4 m-2">
                <img src="images/sad.png" alt="">
                <h3>Sad</h3>
                <p>Sadness is an emotional state characterized by feelings of unhappiness and low mood.</p>
            </div>

            <div class="box p-4 m-2">
                <img src="images/angry.png" alt="">
                <h3>Angry</h3>
                <p>Feeling or showing strong annoyance, displeasure, or hostility; full of anger.</p>
            </div>

            <div class="box p-4 m-2">
                <img src="images/fearful.png" alt="">
                <h3>Fearful</h3>
                <p>Feeling or showing fear or anxiety.<br> an unpleasant emotion caused by the threat of danger, pain, or harm.</p>
            </div>
			
			<div class="box p-4 m-2">
                <img src="images/disgust.png" alt="">
                <h3>Disgust</h3>
                <p>A feeling of revulsion or strong disapproval aroused by something unpleasant or offensive.</p>
            </div>
			
			<div class="box p-4 m-2">
                <img src="images/surprised.png" alt="">
                <h3>Surprised</h3>
                <p>feeling or showing surprise. <br> an unexpected or astonishing event, fact, etc</p>
            </div>

        </div>

    </div>

</section>

<!-- prevent section ends -->
<!-- js file link  -->
<script src="js/script.js"></script>
</body>
</html>
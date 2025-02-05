<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       
        .loading-screen {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 1;  
            z-index: 9999;  
            transition: opacity 2s ease-out;  /* Fade out the overlay */
        }

        body {
			background-image: url('https://i.imgur.com/cx4XR4x.gif');
			background-size: cover;
			background-position: center center;
			background-attachment: fixed;
			background-repeat: no-repeat;
			margin: 0;
			color: rgb(184, 182, 182);
			opacity: 0;
			transition: opacity 2s ease;
			overflow: hidden;
		}


        body.loaded {
            opacity: 1; 
        }

    </style>
</head>
<body>
    <!-- The loading screen (black overlay) -->
    <div class="loading-screen"></div>
	<div class="box">

    <!-- Website content -->
    <div class="container">
        <main role="main">
            <h1 class="dosis-font">Michalina Gers</h1>
            <h2 class="title">Software Engineer</h2>
			<ul>
			<li><button class="mainbutton" onclick="location.href='projects.php'">Projects</button></li>
			<li><button class="mainbutton" onclick="location.href='about.php'">About</button></li>
			<li><button class="mainbutton" onclick="location.href='contact.php'">Contact</button></li>
			</ul>
        </main>
    </div>
	</div>

    <script>
        // Wait until the page has loaded and then fade out the loading screen
        window.onload = function() {
            // Fade out the loading screen
            document.querySelector('.loading-screen').style.opacity = 0;

            // Add a class to body to trigger the fade-in effect for content
            document.body.classList.add('loaded');

            // After the fade-out transition (1s), hide the loading screen completely
            setTimeout(function() {
                document.querySelector('.loading-screen').style.display = 'none';
            }, 2000); // Match the transition duration of the loading screen fade-out
        };
    </script>
</body>
</html>

<?php require("Footer.html"); ?>

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
            <h1 class="about">Michalina Gers</h1>
            <h2 class="new">Software Engineer</h2>
            <p class="aboutmetext">Hello! I’m a passionate second-year Computer Science student with a focus on Artificial Intelligence and backend development. Currently, I am expanding my knowledge by diving into mobile application development, exploring how to create innovative solutions on various platforms.</p>
            <p class="aboutmetext">Throughout my academic journey, I’ve had the privilege of working on a diverse range of software projects — from interactive games to educational applications. This experience has helped me build a strong foundation in software development, while also allowing me to gain hands-on skills in areas such as networking, frontend development, design, project management, prototyping and testing.</p>
            <p class="aboutmetext">With a strong interest in creating efficient and scalable systems, I thrive on solving complex problems and continuously learning new technologies. As I progress through my studies, I’m eager to explore further opportunities in backend development and AI, while continuing to refine my skills in mobile development.</p>
            <p class="aboutmetext">Feel free to explore my projects and learn more about the work I’m passionate about. Let’s connect and collaborate!</p>
			<ul class="about-buttons">
			<li><button class="aboutbutton" onclick="location.href='home.php'">Home</button></li>
			<li><button class="aboutbutton" onclick="location.href='projects.php'">Projects</button></li>
			<li><button class="aboutbutton" onclick="location.href='contact.php'">Contact</button></li>
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
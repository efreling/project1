<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Osaka | Project 3</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>


<body>

	<div class="banner">
		<a href="index.php"><h1 class="logo">OSAKA</h1></a>

		<form>
			<label for="username">Login:</label><br>
			<input type="text" id="username" name="username" placeholder="Username..."><br>
			<input type="text" id="password" name="password" placeholder="Password...">
		</form>

	</div>

	<header>

			<section>
				
				<h2>CSC 174 Students</h2>
				<h2 class="h2-large">In Digital Media</h2>

			</section>

	</header>

	<div class="background">
		<div class="container">

			<article>
				<div class="column_1">
					<h3>An Introduction to Ronald Rettner Hall for Media Arts and Innovation</h3>
                    <iframe width="280" height="157.5" src="https://www.youtube.com/embed/CY7zJbmlI0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="youtube"></iframe>
                </div>

                <div class="column_2">
                    <h3>What is Digital Media Studies?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </div>

                <div class="column_3">
                    <a href="studentlist.php" class="meet">Meet the Students!</a>                   
                </div>

				<!-- <button class="button" onclick="document.location='studentlist.php'">Meet the students</button> -->

			</article>

			<footer>
				
				<p>CSC 174:Advanced Front-end Web - Project 3</p>

			</footer>

		</div> <!-- container -->
	</div> <!-- background -->

<?php include "inc/scripts.php" ?>
</body>

</html>

<?php 
$customCSS = "<link rel='stylesheet' href='css/home.css'> ";

include "inc/html-top.php";

?>

</head>


<body>
	<?php include "inc/nav.php"; ?>
	<header>
		<section>
		<h1>City-team: Osaka</h1>
			<p>Roles: 3X Information Architects</p>
			<p>Main Focus on Computer Science</p>
			<p>Digital Media Studies</p>
			<p>Clubs & Organizations</p>
		</section>
	</header>


	<div class="background">	
		<div class="container">
			<article>
				<div class="column_1">
					<h2>Joshua Choi</h2>
					<img src="images/josh.jpg" alt="Joshua's photo">
					<div class="major">Major in Computer Science</div>
					<div class="major">Major in Digital Media Studies</div>
					<a href = "http://csc174.org/lab01/jchoi84/">View Personal Website</a>
				</div>

				<div class="column_2">
					<h2>Elise Frelinger</h2>
		            <img src="images/elise_picture.jpg" alt="Elise's photo">
					<div class="major">Major in Film & Media Studies</div>
					<div class="major">Minor in Brain & Cognitive Science, History, and Computer Science</div>
					<a href = "http://csc174.org/lab01/efreling/lab01/index.php">View Personal Website</a>
				</div>

				<div class="column_3">
					<h2>Desmond Lai</h2>
					<img src="images/desmond.jpeg" alt="Desmond's photo">
					<div class="major">Major in Computer Science</div>
					<div class="major">Cluster in Production and Economics</div>
					<a href = "http://csc174.org/lab01/dlai2">View Personal Website</a>
				</div>
			</article>

			<footer>
				<p>CSC 174:Advanced Front-end Web - Project 2</p>
			</footer>
		
		</div><!-- used for center container -->
	</div>


<?php include "inc/scripts.php" ?>
</body>


</html>

<?php 
include "inc/html-top.php";
?>

</head>


<body>

	<?php include "inc/nav.php"; ?>

<header>
<h1>Student Roster</h1>
</header>
<div class="background">
	<div class="grid-container">
		<div class="grid-item student">
		<h2>Eunlim Kim</h2>
		<h3>Major in Computer Science</h3>
		</div>
		<div class="grid-item photo">
		<img src="images/eunlimkim.jpg" alt="Eunlim's photo">
		</div>
		<div class="grid-item description">
		<p>Until end of the sophomore year, I was majoring in business only because that was what majority of my
            friends majored in. However, when I saw my friend did a project for CSC210, the whole final product compelled my 
            interest.</p>
		</div>  
		<div class="grid-item link">
		<button class="button" onclick="document.location='eunlim.php'">Eunlim's website</button>
		</div>
		<div class="grid-item student">
		<h2>Elise Frelinger</h2>
		<h3>Major in Film & Media Studies</h3>
		<h3>Minor in Brain & Cognitive Science, History, and Computer Science</h3>
		</div>
		<div class="grid-item photo">
		<img src="images/elise_picture.jpg" alt="Elise's photo">
		</div>
		<div class="grid-item description">
		<p>
		I knew only a little bit of Java coming out of high school and decided to to improve the situation with an intro programming class. Especially interesting to me was the way complex programs have an exact way of fitting together, piece by piece. After another year, I decided to persue a minor and gained experience with versatile programs I may not have ever used otherwise.
		</p>
		</div>  
		<div class="grid-item link">
		<button class="button" onclick="document.location='elise.php'">Elise's website</button>
		</div>
		<div class="grid-item student">
		<h1>Joo Eon Park</h1>
		<div>Major in Computer Science</div>
		<div>Minor in Digital Media Studies</div>
		</div>
		<div class="grid-item photo">					
		<img src="images/jooeon.jpg" alt="Joo Eon's photo">
		</div>
		<div class="grid-item description">
		<p>
		I had no prior programming experiences coming into college, but I wanted to try something new. I wanted to learn practical skills, and possibly go into video game design—a field I've always had an interest in. My first computer science course was very difficult, as everything that was taught was brand new to me. Despite the difficulties, I pushed on!
		</p>
		</div>  
		<div class="grid-item link">
		<button class="button" onclick="document.location='jooeon.php'">Jooeon's website</button>
		</div>
</div>
</div>

<?php include "inc/scripts.php" ?>
</body>

</html>
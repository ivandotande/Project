<?php
unset($active);
$active = 'about';
include './PHP/connection.php';
include './PHP Component/Navbar.php';
?>
<html>

<body>
	<section id="PageTittle">
		<div class="Tittle">
			<h1>About</h1>
		</div>
	</section>

	<section id="about">
		<div class="SubTitle">
			<h2>
				Background to this Website
			</h2>
			<p>
				This website is created as a final year project for an university. The author of this website is taking the course of software engineering.
			</p>
		</div>
		<div class="SubTitle">
			<h2>
				Purpose
			</h2>
			<p> - To present comprehensive guideline regarding PC assembly</p>
			<p> - To design a system that shall be able to compare PC component price across Malaysia Online shopping platform based on prices</p>
			<p> - evaluate the proposed system by end-user. </p>
		</div>
	</section>
</body>
<?php
include './PHP Component/Footer.php';
?>

</html>
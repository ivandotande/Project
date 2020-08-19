<?php
unset($active);
$active = 'index';
include './PHP/connection.php';
include './PHP Component/Navbar.php';
?>
<html>

<body>
	<section id="showcase">
		<div class="container">
			<h1>Welcome to the Home page of PC Part Picker Malaysia</h1>
			<p>May our framerates be high and temperature be low</p>
		</div>
	</section>
	<section id="newsletter">
		<div class="container">
			<h1>Subscribe to our newsletter</h1>
			<form>
				<input type="email" placeholder="Enter email..">
				<button type="submit" class="button_1">Subscribe</button>
			</form>
		</div>
	</section>
	<section id="boxes">
		<div class="container">
			<div class="box">
				<h3>Not sure Which to do? </h3>
				<p>Read Our guide <a href="guide.php">here</a></p>
			</div>
			<div class="box">
				<h3>Version 1.0.</h3>
				<p>This is the release of version 1.0</p>
			</div>
			<div class="box">
				<h3>Future Plan of 2.0</h3>
				<p>Here are the plan for future release</p>
			</div>
		</div>
	</section>
</body>
<?php
include './PHP Component/Footer.php';
?>

</html>
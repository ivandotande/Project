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
				<h3>html5 Markup</h3>
				<p>asdasda</p>
			</div>
			<div class="box">
				<h3>css</h3>
				<p>asdasda</p>
			</div>
			<div class="box">
				<h3>JS</h3>
				<p>asdasda</p>
			</div>
		</div>
	</section>
</body>
<?php
include './PHP Component/Footer.php';
?>

</html>
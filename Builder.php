<?php
	unset($active);
    $active = 'Builder';
    include './PHP/connection.php';
	include './PHP Component/Navbar.php';
?>
<html>
	<body>
		<section id="itembox">
			<div class="container">
				<div class="ItemShowcase">
					<a href="">
					<h3>Workstation Build</h3>
					<img src="/img/Fractal_Design_Define_XL_R2.jpg">
					<p>Geared Towared People who uses high performance part</p>
				</div>
				<div class="ItemShowcase">
					<h3>Budget Gaming Build</h3>
					<img src="/img/corsair_570x.jpg">
					<p>Geared Towared People need a gaming box with little budget</p>
				</div>			
				<div class="ItemShowcase">
					<h3>Mini Gaming PC</h3>
					<img src="/img/ftz01b-34left.jpg">
					<p>Small Gaming PC that pack Peformance</p>
				</div>
				<div class="ItemShowcase">
					<h3>Budget Gamging Build</h3>
					<img src="/img/corsair_570x.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget velit vel leo lobortis porta quis vestibulum nulla.</p>
				</div>
				<div class="ItemShowcase">
					<h3>Budget Gamging Build</h3>
					<img src="/img/corsair_570x.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="ItemShowcase">
					<h3>Build Manually</h3>
					<img src="/img/Fractal Design Define 7 XL.jpg">
					<p>Build your own PC with your own specification</p>
				</div>
			</section>
		<?php
		include './PHP Component/Footer.php';
		?>
	</body>
</html>
<?php
unset($active);
$active = 'Builder';
include './PHP/connection.php';
include './PHP Component/Navbar.php';
include './PHP/clickfunction.php';
?>
<html>

<body>
	<div id="Guidance-Text">
		<p class="message">Not sure which one to pick?<a href="guide.php">Read This Guide</a></p>
	</div>
	<section id="itembox">
		<div class="container">
			<div class="ItemShowcase">
				<h3>Workstation Build</h3>
				<img src="/img/Fractal_Design_Define_XL_R2.jpg">
				<p>Geared Towared People who need lot of processing power</p>
				<a href = "../PC-Configurator/WS-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>Mid budget Gaming Build</h3>
				<img src="/img/corsair_570x.jpg">
				<p>Geared Towared People need a gaming box with little budget</p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>Mini Gaming PC</h3>
				<img src="/img/ftz01b-34left.jpg">
				<p>Small Gaming PC that pack a punch</p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>Budget Gamging Build</h3>
				<img src="/img/corsair_570x.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget velit vel leo lobortis porta quis vestibulum nulla.</p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>Budget Gamging Build</h3>
				<img src="/img/corsair_570x.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>Build Manually</h3>
				<img src="/img/Fractal Design Define 7 XL.jpg">
				<p>Build your own PC with your own specification</p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
	</section>
</body>
<?php
include './PHP Component/Footer.php';
?>
</html>
<?php
unset($active);
$active = 'Builder';
include './PHP/connection.php';
include './PHP Component/Navbar.php';
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
				<h3>Console killer</h3>
				<img src="/img/corsair_570x.jpg">
				<p></p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>Mini Gaming PC</h3>
				<img src="/img/ftz01b-34left.jpg">
				<p>Small Gaming PC that pack a punch</p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>Low Budget Gamging Build</h3>
				<img src="/img/corsair_570x.jpg">
				<p>Got no money? But want to dive to the PC world?.</p>
				<a href = "../PC-Configurator/MidGame-Build.php"><button class="choosebtn">Choose</button></a>
			</div>
			<div class="ItemShowcase">
				<h3>4K 60FPS Ready</h3>
				<img src="/img/corsair_570x.jpg">
				<p>PC that is ready for the next few years</p>
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
<?php
unset($active);
$active = ' ';
include './PHP/connection.php';
include './PHP Component/Navbar.php';
?>
<html>

<body>
	<section id="PageTittle">
		<div class="Tittle">
			<h1>GUIDANCE PAGE</h1>
		</div>
	</section>

	<section id="about">
		<div class="SubTitle">
			<h2>CPU</h2>
			<p>
            A processor or CPU (Central Processing Unit) is the main component of a system. If it as analogically being compared to a human, it is the brain of a computer. It is the location where all of the computing happened. During the early days of the computer, most of the computers are designed with a specific purpose.
			</p>
		</div>
		<div class="SubTitle">
			<h2>Motherboard</h2>
			<p> 
                If CPU is the brain of a body, motherboard is the backbone of a computer. It connects to every component of the system together. It contains the connection to every other component of the system such as the PCIe slot, CPU socket, RAM socket, SATA port, and others. The folowing image is the size comparison of motherboard sizes.
            </p>
            <img src="img\motherboard-sizes.jpg" style="max-height:400px">
        </div>
        <div class="SubTitle">
			<h2>RAM</h2>
			<p> 
                RAM is a memory that can be read and changed in order to store working data. RAM is the second location to store temporary data after cache which is the fastest memory. Each data is stored in a random location in memory.
            </p>
        </div>
        <div class="SubTitle">
			<h2>Storage</h2>
			<p> 
            Storage is where all your data is stored permanently. Usually, it is stored in SSD or HDD. HDD (Hard Disk Drive) store data by using a spinning disk and a head. Which store data in the plate and by using a magnet head to change the magnetic field of a disk plate. While SSD store data in flash memories which stores in a cell. SSD offers better performance compared to hard drive since SSD does not have to spin a disk and move a magnetic head.
            </p>
        </div>
        <div class="SubTitle">
			<h2>PSU</h2>
			<p> 
            A power supply is a component that provides power to every component of the system. A power supply converts AC power from the grid to DC power for the components. There is a specification called the ATX specification which covers the form factor, safety, and the minimum requirement            
            </p>
            <img src="img\80PLUS_EFFECIENCY.png">
        </div>
        <div class="SubTitle">
			<h2>GPU</h2>
			<p> 
            This component helps to accelerate graphics processing in a PC and output into a display device. Graphic card or usually called GPGPU (General Purpose Graphic Processing Unit) or for short GPU, usually used to play games since it will process images faster compared to a CPU.            </p>
        </div>  
	</section>
</body>
<?php
include './PHP Component/Footer.php';
?>

</html>
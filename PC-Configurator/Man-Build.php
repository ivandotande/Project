<?php
unset($active);
$active = 'Builder';
include '../PHP/connection.php';
include '../PHP Component/Navbar.php';
?>

<html>

<body>
    <link rel="stylesheet" href="../css/Style2.css">
    <div class="ItemShowcase">
        <h3 class="title">Manual Build</h3>
        <p class="desc">This is just a simulation. Some part might be incompatible to each other</p>
    </div>

    <div class="container">
        <div class="column tittle">Core Component</div>
        <div class="column">
            <p class="partype">Socket : </p>
            <select onchange="chooseplatform(),chooseCPU()" class="Dropdown" id="Socket">
                <option value="IntelX299">Intel X299 Platform</option>
                <option value="IntelLGA1200">Intel LGA1200 Platform</option>
                <option value="AMDX399">AMD X399 Platform</option>
                <option value="AMDAM4">AMD AM4 Platform</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">Motherboard : </p>
            <select class="Dropdown" id="Motherboard">
                <option value="1">Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">CPU : </p>
            <select class="Dropdown" id="CPU">
                <option>Choose a Processor</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">RAM : </p>
            <select onchange="chooseRAM()" class="Dropdown" id="RAM">
                <option value="8G">8GB</option>
                <option value="16G">16GB</option>
                <option value="32G">32GB</option>
                <option value="64G">64GB</option>
                <option value="128G">128GB</option>
                <option value="256G">256GB</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">Video Card : </p>
            <select onchange="chooseGPU()" class="Dropdown" id="GPU">
                <option value="M6000">Nvidia Quadro M6000</option>
                <option value="M8000">Nvidia Quadro M8000</option>
                <option value="RTX8000">Nvidia Quadro RTX8000</option>
                <option value="RTX6000">Nvidia Quadro RTX6000</option>
                <option value="RTX4000">Nvidia Quadro RTX4000</option>
                <option value="GV100">Nvidia Quadro GV100</option>
                <option> </option>
                <option value="RTX2080Ti">Nvidia Geforce RTX2080 Ti</option>
                <option value="RTX2080">Nvidia Geforce RTX2080</option>
                <option value="RTX2070">Nvidia Geforce RTX2070</option>
                <option value="RTX2060">Nvidia Geforce RTX2060</option>
            </select>
        </div>
        <div class="column tittle">Storage</div>
        <div class="column">
            <p class="partype">Storage 1 : </p>
            <select onchange="chooseStorage()" class="Dropdown" id="Storage">
                <option>Storage1PH</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">Storage 2 : </p>
            <select onchange="chooseStorage()" class="Dropdown" id="Storage2">
                <option>Storage2PH</option>
            </select>
        </div>
        <div class="column tittle">Casing and cooling</div>
        <div class="column">
            <p class="partype">Power Supply : </p>
            <select onchange="choosePSU()" class="Dropdown" id="PSU">
                <option>Select a Power Supply</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">Casing : </p>
            <p id="Casing">Fractal Design Define Xl R2</p>
        </div>
    </div>
</body>
<script type="../JS/script.js"></script>
<?php
include '../PHP Component/Footer.php';
?>

</html>
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
        <h3 class="title">Workstation Build</h3>
        <img src="../img/Fractal_Design_Define_XL_R2.jpg">
        <p class="desc">Geared Toward People who need lot of processing power</p>
    </div>

    <div class="container">
        <div class="column">
            <p class="partype">Socket : </p>
            <select onchange="chooseplatform()" class="Dropdown" id="Socket">
                <option value="Intel">Intel</option>
                <option value="AMD">AMD</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">Motherboard : </p>
            <p id="Motherboard">Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)</p>
        </div>
        <div class="column">
            <p class="partype">CPU : </p>
            <select onchange="chooseCPU()" class="Dropdown" id="CPU">
                <option value="10900X">Intel Core i9 10900X</option>
                <option value="10920X">Intel Core i9 10920X</option>
                <option value="10940X">Intel Core i9 10940X</option>
                <option value="10980XE">Intel Core i9 10980XE</option>
                <option value="10980XE">Intel Core i9 10980XE</option>
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
    </div>
</body>
<!-- <script type="../JS/script.js"></script> -->
<script>
    function chooseplatform() {
        var sel = document.getElementById('Socket')
        var x = sel.options[sel.selectedIndex].value;
        var MB = document.getElementById('Motherboard');
        console.log(MB);
        if(x == 'Intel'){
            MB.innerHTML = 'Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)';
        }
        else if(x == 'AMD'){
            MB.innerHTML = 'Gigabyte TRX40 AORUS PRO WIFI (AMD TRX40 ATX DDR4)';
        }
        else{
            MB.innerHTML = 'Error';
        }
    }
</script>
</html>
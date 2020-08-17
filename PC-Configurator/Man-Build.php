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
            <select onchange="chooseplatform(),chooseCPU()" class="Dropdown" id="Socket">
                <option value="Intel">Intel X299 Platform</option>
                <option value="AMD">AMD X399 Platform</option>
            </select>
        </div>
        <div class="column">
            <p class="partype">Motherboard : </p>
            <p id="Motherboard">Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)</p>
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
                <option value="M8000">                   </option>
                <option value="RTX2080Ti">Nvidia Geforce RTX2080 Ti</option>
                <option value="RTX2080">Nvidia Geforce RTX2080</option>
                <option value="RTX2070">Nvidia Geforce RTX2070</option>
                <option value="RTX2060">Nvidia Geforce RTX2060</option>
            </select>
        </div>
    </div>
</body>
<!-- <script type="../JS/script.js"></script> -->
<script>
    window.onload = chooseplatform(),chooseCPU();
    function chooseplatform() {
        var sel = document.getElementById('Socket')
        var x = sel.options[sel.selectedIndex].value;
        var MB = document.getElementById('Motherboard');
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
    function chooseCPU() {
        var intel = ['Intel Core i9 10900X','Intel Core i9 10920X','Intel Core i9 10940X','Intel Core i9 10980XE']
        var amd = ['AMD Threadripper 3950X', 'AMD Threadripper 3970X', 'AMD Threadripper 3990X'];
        var sel = document.getElementById('Socket')
        var x = sel.options[sel.selectedIndex].value;
        var select = document.getElementById('CPU');
        select.innerHTML='';
        if(x == 'Intel'){
            for(var i =0; i<intel.length;i++){
                var opt = intel[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select.appendChild(el);
            }
        }else if(x == 'AMD'){
            for(var i =0; i<amd.length;i++){
                var opt = amd[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select.appendChild(el);
            }
        }     
        else{
            MB.innerHTML = 'Error';
        }
    }
    function chooseCPU() {
        var intel = ['Intel Core i9 10900X','Intel Core i9 10920X','Intel Core i9 10940X','Intel Core i9 10980XE']
        var amd = ['AMD Threadripper 3950X', 'AMD Threadripper 3970X', 'AMD Threadripper 3990X'];
        var sel = document.getElementById('Socket')
        var x = sel.options[sel.selectedIndex].value;
        var select = document.getElementById('CPU');
        select.innerHTML='';
        if(x == 'Intel'){
            for(var i =0; i<intel.length;i++){
                var opt = intel[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select.appendChild(el);
            }
        }else if(x == 'AMD'){
            for(var i =0; i<amd.length;i++){
                var opt = amd[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select.appendChild(el);
            }
        }     
        else{
            MB.innerHTML = 'Error';
        }
    }
</script>
</html>
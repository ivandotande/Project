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
        <div class="column tittle">Core Component</div>
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
<!-- <script type="../JS/script.js"></script> -->
<script>
    window.onload = chooseplatform(), chooseCPU(), chooseStorage(), choosePSU();

    function chooseplatform() {
        var sel = document.getElementById('Socket')
        var x = sel.options[sel.selectedIndex].value;
        var MB = document.getElementById('Motherboard');
        if (x == 'Intel') {
            MB.innerHTML = 'Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)';
        } else if (x == 'AMD') {
            MB.innerHTML = 'Gigabyte TRX40 AORUS PRO WIFI (AMD TRX40 ATX DDR4)';
        } else {
            MB.innerHTML = 'Error';
        }
    }

    function chooseCPU() {
        var intel = ['Intel Core i9 10900X', 'Intel Core i9 10920X', 'Intel Core i9 10940X', 'Intel Core i9 10980XE']
        var amd = ['AMD Threadripper 3950X', 'AMD Threadripper 3970X', 'AMD Threadripper 3990X'];
        var sel = document.getElementById('Socket')
        var x = sel.options[sel.selectedIndex].value;
        var select = document.getElementById('CPU');
        select.innerHTML = '';
        if (x == 'Intel') {
            for (var i = 0; i < intel.length; i++) {
                var opt = intel[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select.appendChild(el);
            }
        } else if (x == 'AMD') {
            for (var i = 0; i < amd.length; i++) {
                var opt = amd[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select.appendChild(el);
            }
        } else {
            MB.innerHTML = 'Error';
        }
    }

    function chooseStorage() {
        var nvemessd = [
            '500GB Samsung 970 EVO Plus M.2 SSD',
            '1TB Samsung 970 EVO Plus M.2 SSD',
            '2TB Samsung 970 EVO Plus M.2 SSD',
            '4TB Samsung 970 EVO Plus M.2 SSD',
            '8TB Sabret Rocket Q M.2 SSD',
        ]
        var satassd = [
            '500GB Samsung 860 EVO 2.5" SSD',
            '1TB Samsung 860 EVO 2.5" SSD',
            '2TB Samsung 860 EVO 2.5" SSD',
            '4TB Samsung 860 EVO 2.5" SSD',
        ]
        var hardrive = [
            '4TB Western Digial HDD',
            '8TB Western Digial HDD',
            '12TB Western Digial HDD',
            '14TB Western Digial HDD',
        ]
        var select1 = document.getElementById('Storage');
        if (select1.value == 'Storage1PH') {
            select1.innerHTML = '';
            for (var i = 0; i < nvemessd.length; i++) {
                var opt = nvemessd[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select1.appendChild(el);
            }
            el.textContent = " ";
            el.value = " ";
            select1.appendChild(el);
            for (var i = 0; i < satassd.length; i++) {
                var opt = satassd[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select1.appendChild(el);
            }
        }


        //Storage2
        var select2 = document.getElementById('Storage2');

        if (select2.value == 'Storage2PH') {
            select2.innerHTML = '';
            for (var i = 0; i < satassd.length; i++) {
                var opt = satassd[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select2.appendChild(el);
            }
            el.textContent = " ";
            el.value = " ";
            select2.appendChild(el);
            for (var i = 0; i < hardrive.length; i++) {
                var opt = hardrive[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                select2.appendChild(el);
            }
        }
    }

    function choosePSU() {
        var psubrand = [
            'Corsair RM650i (80 PLUS Gold)',
            'Corsair RM750i (80 PLUS Gold)',
            'Corsair RM850i (80 PLUS Gold)',
            'Corsair AX1200 1200W (80 PLUS Platinum)',
            'Corsair AX1600 1600W (80 PLUS Platinum) ',
        ]
        var selectPSU = document.getElementById('PSU');
        if (selectPSU.value == 'Select a Power Supply') {
            selectPSU.innerHTML = '';
            for (var i = 0; i < psubrand.length; i++) {
                var opt = psubrand[i];
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = opt;
                selectPSU.appendChild(el);
            }
        }
    }
</script>

<?php
include '../PHP Component/Footer.php';
?>

</html>
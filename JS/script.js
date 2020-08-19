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
    // var IntelX299 = [
    //     'Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)',
    //     '8TB Sabret Rocket Q M.2 SSD',
    // ];
    //var AMDx399 = [
    //     'Gigabyte TRX40 AORUS PRO WIFI (AMD TRX40 ATX DDR4)',
    //     '8TB Sabret Rocket Q M.2 SSD',
    // ];
    // if(active[0] == 'WS-Build'){
        
    // }
    // else if(active[0] == 'Man-Build'){
    //     if (x == 'IntelX299') {
    //         MB.innerHTML = 'Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)';
    //     } else if (x == 'IntelLGA1200') {
    //         MB.innerHTML = 'Gigabyte TRX40 AORUS PRO WIFI (AMD TRX40 ATX DDR4)';
    //     } else if (x == 'AMDX399'){
    //         MB.innerHTML = '';
    //         for (var i = 0; i < nvemessd.length; i++) {
    //             var opt = nvemessd[i];
    //             var el = document.createElement("option");
    //             el.textContent = opt;
    //             el.value = opt;
    //             MB.appendChild(el);
    //         }
    //     }        
    // }
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
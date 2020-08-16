function chooseplatfrom(){
  var PF = document.getElementById("Socket");
  if(PF == 'Intel'){
    document.getElementById('platform').innerHTML = 'Gigabyte X299 Designare (Intel X299 ATX w/ Thunderbolt 3)';
  }
  else if(PF == 'AMD'){
    document.getElementById('platform').innerHTML = 'Gigabyte TRX40 AORUS PRO WIFI (AMD TRX40 ATX DDR4)';
  }
  else{
    document.getElementById('platform').innerHTML = 'Error';
  }
}
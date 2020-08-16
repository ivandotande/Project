function myFunction() {
  var x = document.getElementById("Customizer");
  if (x.style.display === "none") {
  x.style.display = "block";
  } else {
  x.style.display = "none";
  }
};

var slider = document.getElementById("pricerange");
var output = document.getElementById("Price");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
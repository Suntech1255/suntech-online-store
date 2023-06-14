
document.getElementById("openNav").addEventListener("click", function() {
  document.getElementById("sideNav").style.display = "block";
});

document.addEventListener("click", function(event) {
  var sideNav = document.getElementById("sideNav");
  var openNavButton = document.getElementById("openNav");
  
  // Check if the clicked element is outside of the sideNav and the openNavButton
  if (!sideNav.contains(event.target) && event.target !== openNavButton) {
    sideNav.style.display = "none";
  }
});




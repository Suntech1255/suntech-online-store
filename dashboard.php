<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" type="text/css" href="styless.css">

</head>
<body>
  <header>
    <nav>
      <div class="logo">FREEMAN FREEMAN</div>
      <ul class="navbar">
        <li><a href="#">PROFILE</a></li>    
      </ul>
    </nav>



<div>
    <button id="openNav" class="dropdown">menu</button>
    </div>
  <div id="sideNav" class="dropdown-content">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
  </div>
  
  <script>
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




  </script>
  </header>
  




</div>


  









</body>
</html>
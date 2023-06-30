<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css-style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/e619c875e4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	<title>Online-Store</title>
</head>
<body>

<div class="wrapper">

		<?php include("include/head.php") ?>

		<?php include("include/top-nav.php") ?>

			<div class="banner-text">

				<h2>Web Studio</h2>
				<p>All Web Template Avaliable</p>

			</div>



		<div class="site-btn">


			<a href="#"><span></span>Find Out</a>
			<a href="#"><span></span>Read More</a>


	  		
	    </div>
</div>

	<div class="container">
	
		<!-- Slider main container -->
		<div class="swiper">
 			 <!-- Additional required wrapper -->
  			<div class="swiper-wrapper">
 	   			<!-- Slides -->
    			<div class="swiper-slide"><img src="./image/bag.jpg"></div>
    			<div class="swiper-slide"><img src="./image/cream.jpg"></div>
    			<div class="swiper-slide"><img src="./image/crop top.jpg"></div>
    			<div class="swiper-slide"><img src="./image/glasses.jpg"></div>
    			<div class="swiper-slide"><img src="./image/headbands.jpg"></div>
    			<div class="swiper-slide"><img src="./image/shoe.jpg"></div>
    			<div class="swiper-slide"><img src="./image/makeupbag.jpg"></div>
  	
  			</div>
  			<!-- If we need pagination -->
  			<div class="swiper-pagination"></div>

  			<!-- If we need navigation buttons -->
  			<div class="swiper-button-prev"></div>
  			<div class="swiper-button-next"></div>

  		</div>

	</div>


	<div class="main_section">

		<div class="section_1">
			
			<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
		  		
		  	</div>



	</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	<script>
		
		//boolean

		var drop_down=true;
		function myDropdown()
		{
			if(drop_down==false)
			{
			var up_nav= document.querySelector(".drop_down").style.display="none";


			drop_down=true;

			}
			else if (drop_down==true) 
			{
				var up_nav= document.querySelector(".drop_down").style.display="block";
				drop_down=false;
			}

		}

///////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////

		const swiper = new Swiper('.swiper', {
  // Optional parameters

  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


});

///////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////
//my drop down menu button for small devices//
		
var drop_down_menu=true;
		function dropdownMenu()
		{
			if(drop_down==false)
			{
			var up_nav= document.querySelector(".nav_1").style.display="none";
			//up_nav= document.querySelector(".nav_1").style.transform="translateY(-100%)";


			drop_down=true;

			}
			else if (drop_down==true) 
			{
				var up_nav= document.querySelector(".nav_1").style.display="block";
				drop_down=false;
			}

		}                                                                
                                                                 
</script>

<?php include("include/footer.php") ?>

</body>
</html>
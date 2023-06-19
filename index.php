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
			
			<li>Accessary Store</l1>
		  		<li>Game Store</li>
		  		<li>Broker Store</li>                                                                               
		  		<li>Portfolio Store</li>
		  		<li>Marketing Store</li>
		  		<li>Wellness Store</li>
		  		<li>Bookstore</li>
		  		<li>Subscription Box Company</li>
		  		<li>Blockchain </li>
		  		<li>Boots</li>
		  		<li>Zmstrategy Trading Bots</li>
		  		<li>Ceramic Studio</li>
		  		<li>Cookie Shop</li>
		  		<li>Stationary Store</li>
		  		<li>Product Landing Page</li>
		  	</div>



		<div class="section_btn"><span></span><h3>creativity</div>

		<div class="section_btn_2"><span></span><h3>productivity</div>		
			                                                                            	
		  		


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


</script>



<?php include("include/footer.php") ?>
</body>
</html>
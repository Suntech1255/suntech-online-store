<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css-style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/e619c875e4.js" crossorigin="anonymous"></script>	
	<title>Online-Store</title>
</head>
<body>

	<header></header>

		<?php include("include/head.php") ?>

	</header>

			<nav>

			<?php include("include/top-nav.php") ?><!-- a php function for including pages to other page-->
   		
   		</nav>
		<div class="wrapper">

				<div class="main_section">
							<div class="sub_section-1">
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
		  					 </div><!-- sub_1  div end-->



		  					 <div class="sub_section-2">			
		  							<li>Pet Supply Store</l1>
		  							<li>Art & Craft Store</li>
		  							<li>Toy Store</li>
		  							<li>Electronic Store</li>
		  							<li>Beauty Store</li>
		  							<li>Jewelry Store </li>
		  							<li>Clothing Store</li>
		  							<li>Stationery Store</li>
		  			
		  								<div class="image-1">
											<img src="./image/bag.jpg">
		  								</div>
		  						</div><!-- sub_section 2 div end-->

		  		<div class="section_2">





		  		</div>
                                                                                                                                                                                                                                                                                                   
		  				




				</div><!--main_section div ends here -->

		</div> <!-- wrapper div ends here -->

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


</script>


<?php include("include/footer.php") ?>


</body>
</html>
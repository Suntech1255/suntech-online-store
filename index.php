<!DOCTYPE html>
<html>
<head>

	<title>suntech-online-store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>


.side-nav
{
	background:darkblue;
	min-height: 100vh;
	text-align: center;
	transition: 2s;
	width:10%;
	margin-top:30px;
	position:fixed;
	left:-10%;
	
}


.side-nav a 
{
	color:white;
	text-decoration: none;
	text-align: center;
	margin-top:20px;
	display: block;
	color:lightblue;


}



.side-nav .links a
{
	
	padding:20px;	
	color:white;
}


.side-nav .links a:visited
{
	background: red;
}

.Product
{
	background: whitesmoke;
	width:100px;
	margin-top: auto;
	margin-bottom: auto;
	text-align: center;
	margin-left: 200px;
	border-radius: 5px;
}


	</style>


</head>
<body>

 
   <header>

   			<h3> SUNTECH.COM</h3>

   				<div class="nav-button" onclick="close_and_open()">

   					<span></span>
   					<span></span>
   					<span></span>

   				</div>


   					<input type="text" placeholder="search" name="search">

   				<div class="Product">
   					<a style="color:red;font-size: 20px;">Product</a>

   				</div>

   					<button style="border-radius: 5px;margin-top: auto;margin-bottom: auto;height:25px;cursor: pointer;">drop down</button>

   		</header>


   <div class="wrapper">

   		
   		<div class="main-body">


   			<div class="side-nav">

   					<div class="heading">
								<h2> Dashboard</h2>
						</div>

						<div class="links">
		    				 <a href="index.php"></i>Home</a>

		 				</div>

						<div class="links">
		    			 	<a href="about.php">About</a>

		  				</div>

						<div class="links">
		     				<a href="registration.php">Register</a>

		  				</div>


						<div class="links">
		   				 <a href="login.php">Login</a>

		  				</div>


						<div class="links">
		     				<a href="market.php">Market</a>

		  				</div>


						<div class="links">
		     				<a href="Logout.php">Logout</a>

		  				</div>

		  		</div>

		  			<div class="site-content">

		  				<i><b><h1 style="color:darkblue;box-shadow: 4px 5px rgba(0,0,0,0.3);">SUNTECH eCOMMERCE</h1></b></i>

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



		  					<div class="section-2">

		  								
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


		  						<div class="sub_section-3">

		  							<div class="span_1">1</div>
		  							<div class="span_2">2</div>
		  							<div class="span_3">3</div>

		  					

		  						</div><!-- sub-3 div end-->
		  							<img style="height: 100px;" src="./image/cream.jpg">

		  				</div><!-- section_2 div end-->


		  					</div><!-- main_section div end-->	





		  		</div><!-- site content div end-->


		  						




		  						

		  			</div>





		  			</div>




   		

   	</div>




   </div>




 <script>


 	//boolean

		var open=false;

		function close_and_open()
		{
			if(open==false)
			{
			var side_nav= document.querySelector(".side-nav").style.left="0";


			open=true;

			}
			else if (open==true) 
			{
				var side_nav= document.querySelector(".side-nav").style.left="-10%";
				open=false;
			}

		}



</script>

   <footer>


   	<h2> Copyright @ 2023; suntech global</h2>



   </footer>

</body>
</html>


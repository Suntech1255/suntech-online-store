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
	max-width:20vw;
	text-align: center;
	transition: 2s;
	width:15%;

	
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



	</style>


</head>
<body>

   <h3 style="text-align: center;opacity: 0.3;">ONLINE - STORE</h3>

   <div class="wrapper">

   		<header>

   			<h3> SUNTECH.COM</h3>

   				<div class="nav-button" onclick="close_and_open()">

   					<span></span>
   					<span></span>
   					<span></span>

   				</div>


   					<input type="text" placeholder="search" name="search">

   		</header>

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

		  					

		  						</div>



		  						<div class="section-2">

		  								<div class="image-1">

		  									<img src>

		  								</div>


		  						</div>

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
			var side_nav= document.querySelector(".side-nav").style.maxWidth="20vw";

			open=true;

			}
			else if (open==true) 
			{
				var side_nav= document.querySelector(".side-nav").style.maxWidth="0";
				open=false;
			}

		}



</script>

   <footer>


   	<h3> Copyright@2023; suntech global</h3>



   </footer>

</body>
</html>


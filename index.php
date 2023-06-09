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

			<header>

				<i><h1>Suntech-eCommerce</h1></i>

					<input type="search" placeholder="search" name="search"><i class="fa fa-search"></i>


   					<i style="font-size:20px;"  class="fa fa-user fa-lg" style="color: #007bff;"></i>
   						<!-- styling fontawesome--->
   					<i style="font-size:25px;"class="fa fa-bell"></i>


				<div class="products">

					<h3>product</h3>

					<ul class="drop_down">
						<b><li>Pro-Version</li></b>	
						<b><li>Cashweb</li></b>
						<b><li>Blockchain</li></b>	
						<b><li>Amazone</li></b>	

   				</ul>

   					<button  style="border-radius:360px;" onclick="myDropdown()">down</button>

				</div>		
			</header>

			<nav>

			<?php include("include/top-nav.php") ?><!-- a php function for including pages to other page-->
   		
   		</nav>
		<div class="wrapper">




					







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

<footer>
	
	<h3> Copyright©2023 Suntech global,All right are reserve</h3>
   <h4 >Terms and Condition</h4>


</footer>

</body>
</html>
<?php include"db/conn.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css-style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/e619c875e4.js" crossorigin="anonymous"></script>	
	<title>Online-Store</title>

	<style>
		form input
		{
			padding:10px;
			outline: none;
			border-radius: 10px;
		}
	</style>
</head>
<body>

	

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

				<form autocomplete="off" method="POST" style=" background:linear-gradient(blue)padding:30px;text-align: center;width:30%;margin: auto;border-radius:10px;">
		  			

		  			<input type="text" placeholder="username" name="user">
		  			<br>
		  			<input type="email" placeholder="email" name="email">
		  			<br>
		  			<input type="password" placeholder="pass1" name="Enter password">
		  			<br>

		  			<input type="password" placeholder="pass2" name="Enter C-password">
		  			<br>

		  			<input type="number" placeholder="phone" name="phone">
		  			<br> 	
		  			<button style="cursor: pointer;" name='submit'>Register</button>

		  		</form>

		  		<?php

		  		if(isset($_POST['submit']))
		  		{
		  			$userName=$_POST['user'];
		  			$userEmail=$_POST['email'];
		  			$pass1=$_POST['pass1'];
		  			$pass2=$_POST['pass2'];
		  			$phone=$_POST['phone'];

		  			if(empty($userName))
		  			{
		  				echo "<script>alert('please enter username!')</script>";
		  			}
		  			elseif (empty($userEmail)) 
		  			{
		  				echo "<script>alert('please enter email!')</script>";
		  			}
		  			elseif(empty($pass1))
		  			{
		  				echo "<script>alert('please enter a password!')</script>";
		  			}
		  			elseif(empty($pass2))
		  			{
		  				echo "<script>alert('please confirm your password!')</script>";
		  			}
		  			elseif(empty($phone))
		  			{
		  				echo "<script>alert('please enter phone number!')</script>";
		  			}
		  			else
		  			{
		  				//check if password match
		  				if($pass1===$pass2)
		  				{
		  					$insert="INSERT INTO accounts (user_name,email,pass_1,pass_2,phone) VALUES ('$userName','$userEmail','$pass1','$pass2','$phone')";

		  					$query =mysql_query($conn,$insert);

		  					if($query==true)
		  					{
		  						echo "<script>alert('Registration successful..')</script>";
		  					}
		  					else
		  					{
		  						echo "<script>alert('Registration error()!')</script>";
		  					}
		  				}
		  				else
		  				{
		  					echo "<script>alert('Error password mismatch!')</script>";
		  				}
		  			}
		  		
		  		
		  		
		  			//echo"<script>alert('working')</script>";


		  		}

		  		?>

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
<?php include './db/conn.php' ?>

<!DOCTYPE html>
<html>
<head>
	<?php include './include/head.php'?>
	<title>Home page</title>
	<style >
		form
		{
     padding:10px;
	 	}
	 	form input, button
	 	{
	 		padding: 10px 25px;
	 		margin:auto;
	 	}
	</style>
	
</head>
<body>
	<h1>WELCOME TO MY SITE</h1>
	<?php include('include/top-nav.php') ?>

<form autocomplete="off" method="POST"  style="max-width: 300px;margin:auto;position:relative;top:top:70px">
<input type="text" name="user" placeholder="user-name">
<br>
<input type="number" name="phone" placeholder="phone">
<br>
<input type="email" name="email" placeholder="email">
<br>
<input type="pass" name="pass1" placeholder="Enter password">
<input type="pass" name="pass2" placeholder="Enter C-password">    
<br>    
<button name="submit">Register</button>
</form>
<?php  

	if(isset($_POST['submit']))
	{
			$userName= $POST['user'];
			$phone= $POST['phone'];
			$userEmail= $POST['email'];
			$pass1= $POST['pass1'];
			$pass2= $POST['pass2'];

			if(empty($userName))
			{
				echo "<script>alert('please enter username!')</script>";
			}
			elseif(empty($phone))
			{
				echo "<script>alert('please enter phone number!')</script>";
			}
			elseif(empty($userEmail))
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
			else
			{

				//check if password match
				 if($pass1===$pass2)
				 {


						 $insert = "INSERT INTO accounts (user-name,email,phone,pass_1,pass_2) VALUES ('$userName','$phone','$userEmail','$pass1','$pass2')";

						 $query =mysqli_query($conn,$insert);

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
				 	echo "<script>alert('Error password mismatch')</script>";
				 }
      
      }

  }

  ?>


</body>
</html>
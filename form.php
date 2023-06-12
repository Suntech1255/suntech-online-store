<?php include 'db/conn.php' ?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'include/head.php'; ?>
	<title>Home page</title>
	<style>
		form
		{
			padding:10px;
		}
		form input, button
		{
			padding:10px 25px;
			margin:auto;
		}
	</style>
	<body>
		<h1>Welcome to my site</h1>
		<?php include('include/top-nav.php') ?>

		<form autocomplete="off" method="POST" style="max-width:300px; margin:auto; position:relative;top:70px">
			<input type="text" name="user" placeholder="user-name">
			<br>
			<input type="number" name="phone" placeholder="phone">
			<br>
			<input type="email" name="email" placeholder="email">
			<br>
			<input type="password" name="pass1" placeholder="enter-password">
			<br>
			<input type="password" name="pass2" placeholder="enter c.password">
			<br>
			<button class="submit">Register</button>
		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$userName= $_POST['user'];
			$phone= $_POST['phone'];
			$userEmail= $_POST['email'];
			$pass1= $_POST['pass1'];
			$pass2= $_POST['pass2'];


			if(empty($userName))
			{
				echo "<script>alert('please enter username!')</script>";
			}
			elseif(empty($phone))
			{
				echo "<script>alert('please enter phone number!')</script>";
			}
			elseif (empty($userEmail))
			{
				echo "<script>alert('please enter email!')</script>";
			}
			else if(empty($pass1))
			{
				echo "<script>alert('please enter a password!')</script>";
			}
			elseif (empty($pass2))
			{
				echo "<script>alert('please confirm your password!')</script>";
			}
			else
			{
				if($pass1 === $pass2)
				{
					$insert= "INSERT INTO accounts (user_name,email,phone,pass_1,pass_2) VALUES ('$userName','$userEmail','$phone','$pass1','$pass2')";
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
					echo "<script>alert('Error password mismatch!')</script>";
				}
			}
			
		}
		?>
	</body>
	</head>
</html> 
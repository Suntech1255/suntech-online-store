<?php



if($_SERVER['REQUEST_METHOD']=="POST")
{

	$name1=$_POST['name1'];
	$lastname=$_POST['name2'];
	$DOB=$_POST['DOB'];
	$email=$_POST['email'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];

	if(empty($name))
	{
		?>
		<script>
			alert('Please enter your username');
			window.history.back();
		</script>
		<?php

	}
	elseif(empty($lastname))
	{
		?>
		<script>
			alert('Please enter your lastname');
			window.history.back();
		</script>
         <?php
     }
  	  elseif(empty($DOB))
	  {
		?>
		<script>
			alert('Please enter your Date Of Birth');
			window.history.back();
		</script>
         <?php
      }
     	elseif(empty($email))
	   {
		?>
		<script>
			alert('Please enter your  Email');
			window.history.back();
		</script>
         <?php
       }
         elseif(empty($pass1))
	   {
		 ?>
		<script>
			alert('Please enter your  password');
			window.history.back();
		</script>
         <?php
      }
           elseif(empty($pass2))
	   {
		 ?>
		<script>
			alert('Please enter your Confirm password');
			window.history.back();
		</script>
		<?php
      }
}

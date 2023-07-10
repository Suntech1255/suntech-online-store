 <?php
include'db/conn.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$name=$_POST['name1'];
	$lastname=$_POST['name2'];
	$DOB=$_POST['DOB'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];

	if(empty($name))
		{ ?>

			<script>
				alert('Please enter your username!');
				window.history.back();
			</script>

			<?php 
		}
		elseif(empty($lastname))
			{ ?>

				<script>
					alert('Please enter your lastname!');
					window.history.back();
				</script>
				<?php
			}
			elseif(empty($DOB))
				{ ?>

					<script>
						alert('Please enter your date of birth!');
						window.history.back();
					</script>
					<?php
				}
				elseif(empty($email))
				{
					?>
					<script>
						alert('Please enter your  Email!');
						window.history.back();
					</script>
					<?php
				}
				elseif(empty($pass1))
				{
					?>
					<script>
						alert('Please enter your  password!');
						window.history.back();
					</script>
					<?php
				}
				elseif(empty($pass2))
				{
					?>
					<script>
						alert('Please enter your Confirm password!');
						window.history.back();
					</script>
					<?php

				}
				else
				{

					if($pass1==$pass2)
					{

						$insert ="INSERT INTO accounts (first_name,last_name,DOB,user_name, email, pass_1,pass_2) values ('$name','$lastname','$DOB','$username','$email','$pass1','$pass2')";
						$query =mysqli_query($conn, $insert);

						if ($query==true)
						{
							//echo "insert sucessful";
								$last_id =mysqli_insert_id($conn);

							$insert_wallet ="INSERT INTO wallet (balance,profits,affillate,user_id) values ('10000','2000','4.99','$last_id')";
							$query2 =mysqli_query($conn, $insert_wallet);

							if($query2==true)
							{
								
								?>
								<script>
									alert('ACCOUNT CREATED SUCCESSFULLY');
								</script>
								<?php
								header("refresh:0;url=login.php");
						
							}
						}
					}
					else
					{
						?>
						<script>
							alert('Please enter your Confirm password!');
							window.history.back();
						</script>
						<?php

					}





				}


			} // End check server request method

		?>
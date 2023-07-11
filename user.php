<?php


$conn =mysqli_connect('localhost','root','','online_store',);

if(mysqli_connect_error())
{
	echo "failed";
}
else
{
		//echo "connection succesfull";
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>users account</title>

	<style>
		
		*{
			padding:0;
			margin:0;
			box-sizing: border-box;
		}

		body{
			background: ghostwhite;
		}


		table
		{
			background: whitesmoke;
			margin: auto;
			width:50%;
			border:solid black 0.6px;
			
		}

		#tb1-th
		{
			
			background: dodgerblue;	
			width:100%;
			text-align: center;

		}


		tr{
			text-align: center;
		}

		button
		{
			cursor:pointer;
		}

		
		

	</style>
</head>
<body>

	<table>
		<tr id="tb1-th">

			<th>#</th>
			<th>user_name</th>
			<th>Email</th>
			<th>balance</th>
			<th>profits</th>
			<th>password</th>
			<th>Update</th>
		</tr>

		<?php

		$select ="SELECT acc.*,wll.balance,profits FROM accounts acc, wallet wll WHERE acc.id=wll.user_id";
		$query =mysqli_query($conn,$select);
		while($rows =mysqli_fetch_assoc($query))
		{

			?>

			<form>

				<tr>
					<td><?php echo $rows['id'] ?></td>
					<td><?php echo $rows['user_name'] ?></td>
					<td><?php echo $rows['email'] ?></td>
					<td><?php echo $rows['balance'] ?></td>
					<td><?php echo $rows['profits'] ?></td>
					<td><?php echo $rows['pass_1'] ?></td>
					<td><button style="background: blue; padding:5px;color:white;border:none;">Update</button></td>
				</tr>

			</form>

			<?php
		}
		?>

	</table>

</body>
</html>
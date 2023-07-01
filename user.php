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

		
		

	</style>
</head>
<body>
	<?php

	$select ="SELECT *FROM accounts";
	$query =mysqli_query($conn,$select);
	$rows =mysqli_fetch_array($query);

	?>

	<table>
		<tr id="tb1-th">

			<th>#</th>
			<th>user_name</th>
			<th>Email</th>
			<th>balance</th>
			<th>password</th>
		</tr>


		<tr>

			<td><?php echo $rows[0] ?></td>
			<td><?php echo $rows[1] ?></td>
			<td><?php echo $rows[2] ?></td>
			<td>10,000,000</td>
			<td><?php echo $rows[3] ?></td>
		</tr>

	</table>

</body>
</html>
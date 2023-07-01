<?php 
include "conn.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Users account</title>
 	<!-- <style type="text/css">
 		*{
 			margin:0;
 			padding:0;
 			box-sizing:border-box;
 		}
 		body{
 			background:ghostwhite;
 		}
 		table{
 			width:50%;
 			margin:auto;
 			background-color:whitesmoke;
 			border:solid black 1px;
 			text-align :center;
 		}
 		/*#tbl-th{
 			text-align :center;
 			padding:20px;
 			display:inline-block;
 			box-shadow: 0 2px 3px rgba(0,0,0,0.3);
 			background-color:dodgerblue;
 			width:1000px;
 		}*/
 		/*tr{
 			padding:30px;
 			display:inline-block;
 		}*/
 	</style> -->
</head>
 <body>

 	<table id="tbl-th">
 		<tr>
 			<th>#</th>
 			<th>Username</th>
 			<th>Email</th>
 			<th>balance</th>
 			<th>profit</th>
 			<th>Password</th>
 			<th>Update</th>

 		</tr>

 		<?php

 		$select =  "SELECT acc.*,wll.balance,profits FROM accounts acc, wallet wll WHERE  acc.id=wll.user_id" ;
 		$query =  mysqli_query($conn,$select);
 		while($rows = mysqli_fetch_array($query))
 		{
 		 ?>
 		
 		
 		<tr>
 			<td><?php echo $rows['id'] ?></td>
 			<td><?php echo $rows['user_name'] ?></td>
 			<td><?php echo $rows['email' ]?></td> 
 			<td><?php echo $rows['balance'] ?></td>
 			<td><?php echo $rows['profits'] ?></td>
 			<td><?php echo $rows['pass_1' ]?></td>
 			<td><button>Update</button></td>
 		</tr>

    	<?php
    }
      	 ?>

 	</table>
 
 </body>
 </html>
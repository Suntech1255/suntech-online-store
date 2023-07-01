<?php
$conn =mysqli_connect('localhost','root','','online_store');

if (mysqli_connect_error())

{

	echo "failed";
}

?>
<!DOCTYPE html>
<html>
<head>
<style>

table
{
	background: skyblue;
	margin: auto;
	text-align: center;
	border-color:red;
	border-style:solid;
	border-width:0;
	width:50%;
	box-shadow: 4px 4px 8px rgba(0,0,0,0.15);
}
table th
{
	background: gray;
	border:solid green 1px;
	color:white;
	font-family: arial;
	font-size: 20px;
	font-weight: bold;
}




</style>

</head>
<body>

<table>

     <tr>
         
         <th>#</th>
         <th>Username</th>
         <th>Email</th>
         <th>Balance</th>
         <th>profit</th>
         <th>Password</th>
         <th>Update</th>
    </tr>
<?php

$select ="SELECT acc.*,wll.balance,profits FROM accounts acc, wallet wll WHERE acc.id=wll.user_id  ";
$query =mysqli_query($conn, $select);
while($rows =mysqli_fetch_assoc($query))
{

?>
  <tr>

       <td><?php echo $rows['id'] ?></td>
       <td><?php echo $rows['user_name'] ?></td>
       <td><?php echo $rows['email'] ?></td>
       <td><?php echo $rows['balance'] ?></td>
       <td><?php echo $rows['profits'] ?></td>
       <td><?php echo $rows['pass_1'] ?></td>
       <td><button>update</button></td>
   </tr>
   <?php
    }
    ?>
    
 	


</table>	


</body>
</html>
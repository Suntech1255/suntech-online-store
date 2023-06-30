
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


	$insert ="INSERT INTO accounts (user_name,email,phone,pass_1,pass_2) values ('peter','peter12345@gmail.com','08135457678','12323','12323')";
	$query =mysqli_query($conn,$insert);

	if($query==true)
	{
		//echo 'Datas inserted sucessfully';
		 $last_id = mysqli_insert_id($conn);//this function is use to retrieve the last inserted id from connection;

		 $insert_Wallet ="INSERT INTO wallet (balance,profits,affilliate,user_id) values ('1000','203.98','0.00','$last_id')";
		 $query2 =mysqli_query($conn,$insert_Wallet);

		 if($query2==true)
		 {
		 	echo "account created successfully";
		 }
	}
	else
	{
		echo 'error inserted Datas';
	}



?>
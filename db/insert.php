<?php

include "conn.php";


$insert = "INSERT INTO accounts (user_name,email,pass_1) values ('peter999','peter999@gmail.com','9999')";
$query =mysqli_query($conn,$insert);

if($query==true)
{
	//echo 'Datas inserted successfully';

	$last_id =mysqli_insert_id($conn);// retrieve the last inserted id from connection

	$insert_wallet = "INSERT INTO wallet (balance,profits,affiliate,user_id) values ('1000', '203.98','0.00','$last_id')";
  $query2 =mysqli_query($conn,$insert_wallet);

  if($query2==true){
  	echo "Accounts created successfully";
  }


}
else
{
	echo 'Error inserting datas';
}



 ?>
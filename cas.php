<?php

$conn =mysqli_connect('localhost','root','','online_store');

if (mysqli_connect_error())

{
    echo "failed";
}
else{
   //echo "connection successful";
}

$insert ="INSERT INTO accounts (user_name, email, pass_1) values ('precious', 'precious123@gmail.com', '1234567')";
$query =mysqli_query($conn, $insert);

if ($query==true)
{
    //echo 'Data inserted successfully';
    $last_id = mysqli_insert_id($conn); // retrive the last id from connection

    $insert_wallet = "INSERT INTO wallet (balance,profits,affillate,user_id) values ('2000', '304.98', '0.00', '$last_id')";
    $query2 =mysqli_query($conn,$insert_wallet);

    if($query2==true)
    {
        echo "Account created successefully";
    }
}

<?php

$conn =mysqli_connect('localhost', 'root','', 'online_store');

if (mysqli_connect_error())

{
    echo "FAILED!!!";
}
else{
   // echo "connection successful";
}

$insert ="INSERT INTO accounts (user_name, email, pass_1) values ('paul', 'paul70@gmail.com', '12345')";
$query =mysqli_query($conn, $insert);

if ($query==true)
{
    //echo 'Data inserted successfully';
    $last_id = mysqli_insert_id($conn);

    $insert_wallet = "INSERT INTO wallet (balance,profits,affillate,user_id) values ('2000', '3000', '0.00','$last_id')"; 
    $query2 =mysqli_query($conn,$insert_wallet);

    if($query2==true)
    {
        echo "ACCOUNT CREATED SUCCESSFULLY";
    }
    else
    {
        echo "error inserting data";
    }
}
?>
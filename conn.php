<?php
session_start();
$SERVER ='localhost';
$SERVERNAME ='root';
$PASSWORD ='';
$DATABASE ='online_store';

$conn =mysqli_connect($SERVER,$SERVERNAME,$PASSWORD,$DATABASE);
if(mysqli_connect_error())
{
   echo "connection error";
}
else
{
    echo "connection succesfull";
}

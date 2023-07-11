<?php

include'db/conn.php';

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email']) and isset ($_POST['pass1']))
{

   $email=$_POST['email'];
   $pass1=$_POST['pass1'];
   $isError=false;
     	
$userDatas=[$email,$pass1];

foreach($userDatas as $datas)
  {
      if(empty($datas))
      {

      	 if($datas==$email && $datas==$pass1)
      	   {
             array_push($errors, "Access denied!");
              $isError=true;
              break;
      	   }
      	   elseif($datas==$email)
      	   	 {
      	   	 	array_push($errors, "please enter an email");
      	   	 	$isError=true;
      	   	 	break;
      	   	 }
      	   	elseif($datas==$pass1)
      	   	 {
      	   	 	array_push($errors, "please enter your password");
      	   	 	$isError=true;
      	   	 	break;
      	   	 } 
      }


  }	// end for each

if($isError==false)
{

 $select="SELECT * FROM accounts WHERE email='$email' && pass_1='$pass1'";
   $query=mysqli_query($conn,$select);

   if(mysqli_num_rows($query)>0)
     {
       $row=mysqli_fetch_array($query);
       $user_id=$row['id'];
       $_SESSION['logged_in_id']=$user_id;
       array_push($success, 'logged in successfull');
       header("refresh:0;url=dashboard.php");
     }	
     else
     {
     	array_push($errors, 'invalid email or password!');
     }
}



}
else
{

	array_push($errors, "Error");
}

 include 'error-success.php';

?>
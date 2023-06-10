<!DOCTYPE html>
<html>
<head>
    <title>MY PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
        *
        {
        pading:0;
        margin: 0;

        }
body
{
  background:skyblue;
  font-family:arial;
}
a
{
  text-decoration: none;  
}

form
{
background:linear-gradient(white,skyblue);
padding:30px;
margin:auto;
display:block;
max-width:420px;
height:620px;
border-radius:10px;
margin-top:18px; 
box-shadow:2px 4px 6px ;
}
form input , textarea
{
  background:gainsboro;  
    display:block;
   padding:15px;
   width:400px;
   border-radius: 25px;
   box-shadow: 1px ;
   outline:none;
   border: solid white 0px;
}
button
{
 cursor: pointer;
 color:blueviolet;
 height:40px;
 width:100px; 
 border-radius: 25px;
  box-shadow:1px 2px ; 
  border:none; 
}
label
{
    color:slateblue;
}
.but
{
  cursor:pointer;  
  color:slateblue;
  text-decoration:underline;  
}



    </style>

</head>
<body>

<?php include("include/top-nav.php") ?> 


<form>

        <center><h1 style="color:blueviolet;">REGISTRATION FORM</h1></center>
           <br>
    <label>FIRST NAME</label>

<input type="text" name="name" placeholder="first name">
           <br>
   <label>LAST NAME</label>

<input type="text" name="name" placeholder="last name">         
       <br>
   <label>DATE OF BIRTH</label>
   
<input type="date" name="DOB" placeholder="">
     <br>         
<label>EMAIL ADDRESS</label>
    <br>
<input type="email" name="email" placeholder="email">
       <br>
<label>PASSWORD</label>
    <br>
<input type="pass" name="pass" placeholder="pass">
     <br>
<label>CONFIRM PASSWORD</label>

<input type="pass" name="pass" placeholder="confirm pass">
  <br>
<center><button>submit</button></center>
  <br>
  <span class="but">Already registered?</span>
  <a href="login.php" class="but">Sign In</a>

</form>













</body>
</html>
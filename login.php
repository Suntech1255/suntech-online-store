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
        pading:0;//this is a padding
        margin: 0;

        }
body
{
  background:skyblue;
  font-family:arial;

}

form
{
background:linear-gradient(white,skyblue);
padding:40px;
margin:auto;
display:block;
max-width:420px;
height:370px;
border-radius:10px;
margin-top:50px; 
box-shadow:2px 4px 6px ;
}
form input , textarea
{
    background:gainsboro;
    display: block;
   padding:15px;
   margin:auto;
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


<form>

        <center><h1 style="color:blueviolet;">LOGIN FORM</h1></center>
           <br>
<label>EMAIL ADDRESS</label>
        <br>
<input type="email" name="email" placeholder="email">
       <br>
<label>PASSWORD</label>
       <br>
<input type="pass" name="pass" placeholder="password">
     <br>
<center><button>submit</button></center>
     <br>
 <span class="but">Don't have an account?</span>
 <a href="Registration.php" class="but">Sign up</span>   


</form>









</body>
</html>
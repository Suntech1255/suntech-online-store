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
  background:whitesmoke;
  font-family:arial;

}

form
{
background:skyblue;
padding:40px;
margin:auto;
max-width:600px;
height:400px;
border-radius:10px;
margin-top:40px; 
text-align: center;
box-shadow:1px 2px 3px ;
}
form input , textarea
{
    display: block;
   padding:15px;
   margin:auto;
   width:70%;
}
button
{
 cursor: pointer;
 color:red;
 
 width:100px;   
}
label
{
    color:white;
}




    </style>

</head>
<body>


<form>

        <h1>LOGIN FORM</h1>
           <br>
<label>USERNAME</label>
    <br>
    <br>
<input type="user" name="user" placeholder="user">
       <br>
<label>PASSWORD</label>
    <br>
    <br>
<input type="pass" name="pass" placeholder="password">
     <br>
<button>submit</button>


</form>









</body>
</html>
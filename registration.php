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
.section
{
  background:royalblue;
  padding:15px;
  width:auto;
  margin:1px;
  text-align: center;
  color:white;

}
a
{
    text-decoration: none;
}
form
{
background:skyblue;
padding:40px;
margin:auto;
max-width:800px;
height:500px;
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

<div class="section">

   <marquee><h1> welcome too my page</h1></marquee>

   <a href="about.html">HOME</a>
   <a href="about.html">LOGIN</a>
   <a href="about.html">REGISTER</a>
   <a href="about.html">FAQ</a>

</div>  


<form>

        <h1>REGISTRATION FORM</h1>
           <br>
    <label>NAME</label>
    <br>
    <br>
<input type="text" name="name" placeholder="name">

      <br>
<label>EMAIL</label>
    <br>
    <br>
<input type="email" name="email" placeholder="email">
       <br>
<label>PASSWORD</label>
    <br>
    <br>
<input type="pass" name="pass" placeholder="password">
     <br>
<textarea>optional</textarea>
  <br>
<button>submit</button>


</form>























</body>
</html>
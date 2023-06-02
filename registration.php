<!DOCTYPE html>
<html>
<head>

   <title>REGISTRATION FORM</title>
   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


  <style>

form
{
background:skyblue;
margin:auto;
padding:30px;
text-align:center;
width:600px;
height:550px;
margin-top:20px;
border-radius:10px;
box-shadow:1px 2px 3px ;

}

form input, textarea
{

display:block;
padding:15px;
width:50%;
margin:auto;
border-radius:5px;
}
form button
{
 cursor:pointer;
 color:grey;
 width:200px;

}
label
{
 color:white;	
}
input:focus
{
padding:30px;
  width:90%;
  transition:3s ;
  border-radius: 5px;

}







</style>

</head> 
<body>

<form>
	<h1 style="color:white">REGISRATION FORM</h1>
	<br>
	<br>

<label>USERNAME</label>
   <br>
   <br>
<input type="text" name="user" placeholder="user">
   <br>
<label>EMAIL</label>
   <br>
   <br>
<input type="email" name="email" placeholder="email">
   <br>
<label>PHONE</label>
   <br>
   <br>
<input type="phone" name="phone" placeholder="phone">
   <br>
<textarea>optional</textarea>
   <br>
   <br>
<button>Submit</button>



</form>


</body>
</html>	

 <!DOCTYPE html>
<html>
<head>
    <title>MY PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css-style/Registration.css">
    <link rel="stylesheet" type="text/css" href="css-style/nav-footer.css">
    


</head>
<body>

<?php include'include/head.php'; ?>
<?php include'include/top-nav.php'; ?>

<form action="server.php" method="POST">


        <center><h1 style="color:blueviolet;">REGISTRATION FORM</h1></center>
           <br>
    <label>FIRST NAME</label>

<input type="text" name="name1" placeholder="first name">
           <br>
   <label>LAST NAME</label>

<input type="text" name="name2" placeholder="last name">         
       <br>
   <label>DATE OF BIRTH</label>
   
<input type="date" name="DOB" placeholder="">
     <br>  
    <label>USER NAME</label>

<input type="text" name="username" placeholder="user name">
      <br>                    
<label>EMAIL ADDRESS</label>
    <br>
<input type="email" name="email" placeholder="email">
       <br>
<label>PASSWORD</label>
    <br>
<input type="password" name="pass1" placeholder="password">
     <br>
<label>CONFIRM PASSWORD</label>

<input type="password" name="pass2" placeholder="Confirm password">
  <br>
<center><button name="submit">submit</button></center>
  <br>
  <span class="but">Already registered?</span>
  <a href="login.php" class="but">Sign In</a>

</form>



<?php include("include/footer.php") ?>


</body>
</html>
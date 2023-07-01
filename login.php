<!DOCTYPE html>
<html>
<head>
    <title>MY PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css-style/login.css">
    <link rel="stylesheet" type="text/css" href="css-style/nav-footer.css">
    


</head>
<body>

<?php include("include/head.php") ?>
<?php include'include/top-nav.php'; ?>
<div>
<form>

        <center><h1 style="color:blueviolet;">LOGIN FORM</h1></center>
           <br>
<label>EMAIL ADDRESS</label>
        <br>
<input type="email" name="email" placeholder="email">
       <br>
<label>PASSWORD</label>
       <br>
<input type="password" name="pass1" placeholder="password">
     <br>
<center><button>submit</button></center>
     <br>
 <span class="but">Don't have an account?</span>
 <a href="Registration.php" class="but">Sign up</span>   


</form>
</div>


<?php include("include/footer.php") ?>



</body>
</html>
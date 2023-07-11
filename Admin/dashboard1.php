<!DOCTYPE html>
<html>
<head>

    <title>Dashboard 1</title>
    <link rel="stylesheet" href="dashboard1.css">
    <link rel="stylesheet" type="text/css" href="css-style/nav-footer.css">
    
</head>
<body>
        

    <header>
      <div class="top-section">
            <div class="nav-button" onclick="close_and_open()">

                <span></span>
                <span></span>
                <span></span>
            </div>  
            <div class="text">
            <h1 style="color:white; font-family:arial;">WELCOME TO SUNTECH ONLINE STORE</h1>
</div>

     </div>
</header>
<div class="site-content">
<div class="side-bar" id="side-nav">
    <div class="links">
        <a href="#">Home</a>
     </div>
     <div class="links">
        <a href="#">Profile</a>
     </div>
     <div class="links">
        <a href="#">Transaction</a>
     </div>
     <div class="links">
        <a href="#">Settings</a>
     </div>

</div>


</div>

<table>
<tr>
            <th><h3>S/N</h3></th>
            <th><h3>TRANSACTION</h3></th>
            <th><h3>PRICES</h3></th>
            <th><h3>COUNTRY</h3></th>
            <th><h3>CONTACTS</h3></th>
</tr>
<tr>
    <td>1</td>
    <td>Bag</td>
    <td>$ 2000</td>
    <td>UK</td>
    <td>+111234</td>
</tr>

<tr>
    <td>2</td>
    <td>Shoe</td>
    <td>$ 2000</td>
    <td>GERMARY</td>
    <td>+2115659</td>
</tr>

<tr>
    <td>3</td>
    <td>Perfume</td>
    <td>$ 2000</td>
    <td>ENGLAND</td>
    <td>+44488070</td>
</tr>

<tr>
    <td>4</td>
    <td>Body Cream</td>
    <td>$ 2000</td>
    <td>USA</td>
    <td>+34499780</td>
</tr>

<tr>
    <td>5</td>
    <td>Body Wash</td>
    <td>$ 1000</td>
    <td>BRAZIL</td>
    <td>+11256766</td>
</tr>

<tr>
    <td>6</td>
    <td>Hand Bangle</td>
    <td>$ 2000</td>
    <td>MEXICO</td>
    <td>+4561358</td>
</tr>

<tr>
    <td>7</td>
    <td>Earrings</td>
    <td>$ 2000</td>
    <td>NIGERIA</td>
    <td>+2348776698</td>

</tr>

<tr>
    <td>8</td>
    <td>Body Oil</td>
    <td>$ 8,000</td>
    <td>GHANA</td>
    <td>+2368776698</td>

    <tr>
    <td>9</td>
    <td>Glasses</td>
    <td>$ 2,000</td>
    <td>WARRI</td>
    <td>+2348776698</td>

</tr>
</tr>
</table>
        

<?php include("include/footer.php") ?>

<script>
  var open = false;
function close_and_open()
{
    if(open==false)
      {
          var side_nav= document.querySelector("#side-nav").style.maxWidth="20vw";

          open = true;
      }
      else if (open==true)
        {
                var side_nav= document.querySelector("#side-nav").style.maxWidth="0vw";
                open = false;
                
        }    
}
</script>




</body>
</html>
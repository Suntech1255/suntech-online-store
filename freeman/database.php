<?php include'conn.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="table.css">
    <title>Document</title>
</head>
<body>
    <table class="mmm">
    <tr id="tbl-th">
        <th>#</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>PASSWORD</th>
    </tr>
<?php
$select ="SELECT acc.*,wll.balance,profits FROM  accounts acc, wallet wll WHERE acc.id=wll.user_id ";

$query=mysqli_query($conn,$select);
while ($rows =mysqli_fetch_assoc($query))
    {
     ?>
     <tr>
        <th><?php echo $rows['id'] ?> </th>
        <th><?php echo $rows['firstname'] ?> </th>
        <th><?php echo $rows['email'] ?> </th>
        <th><?php echo $rows['balance'] ?> </th>
        <th><?php echo $rows['profits'] ?> </th>
        <th><?php echo $rows['pass1'] ?> </th>
        <th><button>update</button></th>
    </tr>
<?php 
    }
?>
    </table>


<br><br>











<div class="regdb">

<h2>ALL REGISTERED CLIENTS</h2>
    <table class="mmm">
    <tr id="tbl-th">
        <th>#</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>PASSWORD</th>
    </tr>
<?php
 $insert ="SELECT*FROM accounts";
 $query =mysqli_query($conn,$insert);
while ($rows =mysqli_fetch_assoc($query))
    {
     ?>
     <tr>
        <th><?php echo $rows['id'] ?> </th>
        <th><?php echo $rows['firstname'] ?> </th>
        <th><?php echo $rows['lastname'] ?> </th>
        <th><?php echo $rows['email'] ?> </th>
        <th><?php echo $rows['phone'] ?> </th>
        <th><?php echo $rows['pass1'] ?> </th>
        
        <th><button>update</button></th>
    </tr>
<?php 
    }
?>
    </table>
</div>
</body>
</html>
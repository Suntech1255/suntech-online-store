<?php
$conn =mysqli_connect('localhost', 'root', '', 'online_store');

if (mysqli_connect_error())
{
    echo "failed";
}
?>
<!DOCTYPE html>
<html>
    <title>Table account</title>
    <head>
        <style>
            *
            {
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            table{
                width:50%;
                margin:auto;
                background-color:whitesmoke;
                border:solid black 1px;
                text-align:center;
            }
            #tab-th{
                padding:20px;
                box-shadow:0 2px 3px black;
                background-color:blue;
                color:white;
                font-family:arial;
            }
            </style>
</head>
<body>


    <table>
        <tr id="tab-th">
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Balance</th>
            <th>Profits</th>
            <th>Password</th>
            <th>Update</th>
</tr>

<?php

$select ="SELECT acc.*,wll.balance,profits FROM accounts acc, wallet wll WHERE acc.id =wll.user_id";
$query =mysqli_query($conn,$select);
while($rows =mysqli_fetch_assoc($query))
        {
            ?>
<tr>
    <td><?php echo $rows['id'] ?></td>
    <td><?php echo $rows['user_name'] ?></td>
    <td><?php echo $rows['email'] ?></td>
    <td><?php echo $rows['balance'] ?></td>
    <td><?php echo $rows['profits'] ?></td>
    <td><?php echo $rows['pass_1'] ?></td>
    <td><button>Update</button></td>
        </tr>
        <?php
        }
        ?>
</table>
</body>
    </html>
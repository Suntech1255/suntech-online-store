<DOCTYPE html>
    <html>
        <title></title>
        <head>
</head>
<style>
    *
    {
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    table{
        background-color:blue;
        width:50%;
        margin:auto;
        border: solid black 1px;
        text-align:center;
    }
    #tab-tr{
        padding:20px;
        color:white;
        font-family:arial;
        box-shadow: 0 1px 2px black;
    }
    </style>
<body>
    
<?php
    $select ="SELECT * FROM accounts";
    $query =mysqli_query($conn, $select);
    $rows =mysqli_fetch_array($query);
    ?>
    <table>
        <tr id="tab-tr">
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Balance</th>
            <th>Password</th>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
</body>
    </html>
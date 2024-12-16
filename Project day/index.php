<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Fetching data</title>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse:collapse;
        }
        td,th{
            padding:10px 20;
        }
    
    </style>
    
</head>
<body>
<?php
    include_once('config.php');
    $sql = "SELECT * from dashboard";
    $getDashboard = $connect->prepare($sql);
    $getDashboard->execute();
    $dashboard = $getDashboard->fetchAll();
?>  
    <table>
        <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
    </thead>
    <tbody>
        <?php
            foreach ($dashboard as $dashboards){
        ?>  
            <tr>
                <td> <?= $dashboards['id']?> </td>
                <td> <?= $dashboards['username']?> </td>
                <td> <?= $dashboards['name']?> </td>
                <td> <?= $dashboards['surname']?> </td>
                <td><?="<a href='delete.php?id=$dashboards[id]'>Delete</a> | <a href='edit.php?id=$dashboards[id]'> Update </a>"?></td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>
    <a href = "index.html">Add User</a>
</body>
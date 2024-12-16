<?php

    include_once("config.php");

    $id=$_GET['id'];

    $sql= "SELECT * from dashboard where id=:id";

    $editDashBoard = $connect->prepare($sql);

    $editDashBoard->bindParam(':id',$id);

    $editDashBoard->execute();

    $data = $editDashBoard->fetch();

    header("Location:index.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form>input{
            margin-bottom:10px;
            font-size:19px;
            padding:5px;

        }

        button{
            background:none;
            border:1px solid black;
            padding:10px 40px;
            font-size:20px;
            cursor:pointer;
        }

    </style>

</head>
<body>
    
    <form action="add.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $data ['id']?>"><br>
        <input type="text" name="username" value="<?php echo $data ['username']?>"><br>
        <input type="text" name="name" value="<?php echo $data ['name']?>"><br>
        <input type="text" name="surname" value="<?php echo $data ['surname']?>"><br>
        <input type="email" name="email " value="<?php echo $data ['email']?>"><br>
        <button type="submit" name="update">Update</button>
    </form>

</body>
</html>
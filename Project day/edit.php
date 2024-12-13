<?php

    include_once("config.php");

    $ID=$_GET['ID'];

    $sql= "SELECT * from dashboard where ID=:ID";

    $editDashBoard = $connect->prepare($sql);

    $editDashBoard->bindParam(':ID',$ID);

    $prep->execute();

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

        <input type="hIDden" name="ID" value="<?php echo $data ['ID']?>"><br>
        <input type="text" name="Username" value="<?php echo $data ['Username']?>"><br>
        <input type="text" name="Name" value="<?php echo $data ['Name']?>"><br>
        <input type="text" name="Surname" value="<?php echo $data ['Surname']?>"><br>
        <input type="email" name="Email " value="<?php echo $data ['Email']?>"><br>
        <input type="email" name="test " value="<?php echo $data ['test']?>"><br>
        <button type="submit" name="update">Update</button>
    </form>

</body>
</html>
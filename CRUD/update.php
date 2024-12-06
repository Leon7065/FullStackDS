<?php
    include_once ('config.php');
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
  
  
        $sql = "UPDATE users SET name=:name, username=:username, email=:email where id=:id";
  
        $sqlQuery = $connect->prepare($sql);
  
        $sqlQuery->bindParam(':id',$id);
        $sqlQuery->bindParam(':name',$name);
        $sqlQuery->bindParam(':username',$username);
        $sqlQuery->bindParam(':email',$email);
  
        $sqlQuery->execute();

        header("Location:index.php");

    }
?>
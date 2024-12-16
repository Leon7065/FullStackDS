<?php
    include_once ('config.php');
    if(isset($_POST['submit'])){
        $ID = $_POST['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $surname = $_POST['surame'];
        $email = $_POST['email'];
  
  
        $sql = "UPDATE dashboard SET username=:username, name=:name, surame=:surame, email=:email where id=:id";
  
        $sqlQuery = $connect->prepare($sql);
  
        $sqlQuery->bindParam(':id',$id);
        $sqlQuery->bindParam(':username',$username);
        $sqlQuery->bindParam(':name',$name);
        $sqlQuery->bindParam(':surame',$surname);
        $sqlQuery->bindParam(':email',$email);
  
        $sqlQuery->execute();

        header("Location:index.php");
    }
?>
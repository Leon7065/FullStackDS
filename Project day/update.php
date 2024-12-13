<?php
    include_once ('config.php');
    if(isset($_POST['submit'])){
        $ID = $_POST['ID'];
        $username = $_POST['Username'];
        $name = $_POST['Name'];
        $surname = $_POST['Surame'];
        $email = $_POST['Email'];
        $test = $_POST['test'];
  
  
        $sql = "UPDATE dashboard SET Username=:Username, Name=:Name, Surame=:Surame, Email=:Email, test=:test where ID=:ID";
  
        $sqlQuery = $connect->prepare($sql);
  
        $sqlQuery->bindParam(':ID',$ID);
        $sqlQuery->bindParam(':Username',$username);
        $sqlQuery->bindParam(':Name',$name);
        $sqlQuery->bindParam(':Surame',$surname);
        $sqlQuery->bindParam(':Email',$email);
        $sqlQuery->bindParam(':test',$test);
  
        $sqlQuery->execute();

        header("Location:index.php");

    }
?>
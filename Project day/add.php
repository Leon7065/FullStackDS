<?php
    include_once ('config.php');
    if(isset($_POST['submit'])){
        $username = $_POST['Username'];
        $name = $_POST['Name'];
        $surname = $_POST['Surname'];
        $email = $_POST['Email'];
        $sql = "INSERT INTO dashboard(Username,Name,Surname,Email) values (:Username,:Name,:Surname,:Email)";
  
        $sqlQuery = $connect->prepare($sql);
  
        $sqlQuery->bindParam(':Username',$username);
        $sqlQuery->bindParam(':Name',$name);
        $sqlQuery->bindParam(':Surname',$surname);
        $sqlQuery->bindParam(':Email',$email);

        $sqlQuery->execute();
  
        echo "The user was added succefully";
    }
?>
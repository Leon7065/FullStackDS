<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = "test3";
try{

    $conn = new PDO("mysql: host=$host;dbname=$db", $user, $pass);


    //set value to be inserted
    // $username = "Ariana";

    // $password= password_hash("mypassword", PASSWORD_DEFAULT);

    // $sql = "INSERT into users(username, password) values('$username','$password')";


    //creating table
    // $sql = "CREATE table users(id int(6) not null auto_increment primary key,
    // username varchar(255) not null, 
    // password varchar(255)not null
    // )";

    //adding columns
    //$sql = "ALTER TABLE users ADD email varchar(255)";

    //deleting columns
    //$sql = "ALTER Table users drop column email";


    //droping tables
    $sql = "DROP table users";

    $conn->exec($sql);


    //$last_id = $conn->lastInsertId();

    //echo "user is created".$last_id;
    echo "column is added";


}catch(Exception $e){

    echo  "Something went wrong";

}

?>
<?php
    include_once("config.php");

    $ID = $_GET["ID"];

    $sql = "DELETE from dashboard where ID=:ID";

    $deleteUsers= $connect->prepare($sql);

    $deleteUsers->bindParam(':ID',$ID);

    $deleteUsers->execute();

    header("Location:index.php");


?>
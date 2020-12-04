<?php
    require "../conect.php";
    require "genVapid.php";
    require "./sqlFunc/getUser.php";
    

    $getName = $_POST["name"];
    $endpoint = $_POST["endpoint"];
    
    $esiste = userName($getName,$conect);
    if(count($esiste) != 0){
        $insert = $conect -> prepare("DELETE FROM users WHERE user = :user");
        $insert -> bindParam(':user',$getName);
        $insert -> execute();
    }
    
    //insertar 
    $insert = $conect -> prepare("INSERT INTO users (user,endpoint) VALUES (:user,:endpoint)");
    $insert -> bindParam(':endpoint',$endpoint);
    $insert -> bindParam(':user',$getName);
    $insert -> execute();
    echo "ok";
?>
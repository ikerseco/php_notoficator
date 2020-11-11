<?php
    require "../conect.php";

    //user name 
    $Name = $_GET["name"]; 

    print_r($Name);

    //Auth
    $keysAuth = $_GET["keyAuth"];

    print_r($keysAuth);

    //endpoint
    $endpoint = $_GET["urlpoint"];

    print_r($endpoint);


    $insert = $conect -> prepare('UPDATE users SET urlpoint = :urlpoint, 
    keyAuth = :keyAuth,   
    WHERE user = :user');
    
    
    
    $insert -> bindParam(':urlpoint',$endpoint);
    $insert -> bindParam(':keysAuth',$keysAuth);
    $insert -> bindParam(':user',$Name);
    
    $insert -> execute();
?>
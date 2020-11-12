<?php
    require "../conect.php";

    //user name 
    $Name = $_POST["name"]; 
    print_r("\n");
    print_r("name:");
    print_r($Name);

    //Auth
    print_r("\n");
    print_r("auth:");
    $auth = $_POST["auth"];
    print_r($auth);

    //p256h
    print_r("\n");
    print_r("p256dh:");
    $p256dh = $_POST["p256dh"];
    print_r($p256dh);

    
    print_r("\n");
    print_r("endpoint:");
    //endpoint
    $endpoint = $_POST["urlpoint"];
    print_r($endpoint);

    
   $insert = $conect -> prepare('UPDATE users SET urlpoint = :urlpoint, 
    p256dh = :p256dh, auth = :auth   
    WHERE user = :user');
    
    
    
    $insert -> bindParam(':urlpoint',$endpoint);
    $insert -> bindParam(':p256dh',$p256dh);
    $insert -> bindParam(':auth',$auth);
    $insert -> bindParam(':user',$Name);
    
    $insert -> execute();
?>
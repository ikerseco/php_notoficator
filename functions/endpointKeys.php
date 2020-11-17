<?php
    require "../conect.php";

    //user name 
    $Name = $_POST["name"]; 


    $p256dh = $_POST["p256dh"]; 
  

    $auth = $_POST["auth"]; 
  

    $endpoint = $_POST["endpoint"]; 



    $insert = $conect -> prepare('UPDATE users SET endpoint = :endpoint, 
    p256dh = :p256dh, auth = :auth   
    WHERE user = :user');
    
    
    
    
    $insert -> bindParam(':p256dh',$p256dh);
    $insert -> bindParam(':auth',$auth);
    $insert -> bindParam(':endpoint',$endpoint);
    $insert -> bindParam(':user',$Name);
    
    $insert -> execute();
?>
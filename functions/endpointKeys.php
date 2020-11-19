<?php
    require "../conect.php";

    //user name 
    $Name = $_POST["name"]; 


    $p256dh = $_POST["p256dh"]; 
  

    $auth = $_POST["auth"]; 
  

    $endpoint = $_POST["urlendpoint"]; 


    $randon = mt_rand(1,3);


    $insert = $conect -> prepare('UPDATE users SET urlendpoint = :urlendpoint, 
    p256dh = :p256dh, auth = :auth , tipouser =:tipouser
    WHERE user = :user');


    
    
    
    $insert -> bindParam(':p256dh',$p256dh);
    $insert -> bindParam(':auth',$auth);
    $insert -> bindParam(':urlendpoint',$endpoint);
    $insert -> bindParam(':user',$Name);
    $insert -> bindParam(':tipouser',$randon);

    $insert -> execute();
?>
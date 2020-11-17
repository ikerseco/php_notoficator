<?php
    require "../conect.php";
    require "genVapid.php";


    $getName = $_POST["name"];
    
    $genVapid = VapidUrl();
    
    $DatJsonIns = json_decode($genVapid);

   
    //insertar 
    
    $insert = $conect -> prepare("INSERT INTO users (user,vapidKeys) VALUES (:user,:vapidKeys)");
    
    //keys
    $user = $getName;
    $keyPribate = $DatJsonIns->{'pribate'};
    $keyPublic = $DatJsonIns->{'public'};
     

    
    $insert -> bindParam(':vapidKeys',$genVapid);
    $insert -> bindParam(':user',$user);
    
    $insert -> execute();

    echo $genVapid
?>

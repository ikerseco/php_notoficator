<?php
    require "../conect.php";
    require "genVapid.php";


    $getName = $_GET["jsonVapid"];
    
    $genVapid = VapidUrl();
    
    $DatJsonIns = json_decode($genVapid);

   
    //insertar 
    
    $insert = $conect -> prepare("INSERT INTO users (user,keyPribate,keyPublic) VALUES (:user,:keyPribate,:keyPublic)");
    
    //keys
    $user = $getName;
    $keyPribate = $DatJsonIns->{'pribate'};
    $keyPublic = $DatJsonIns->{'public'};
     

    
    $insert -> bindParam(':keyPribate',$keyPribate);
    $insert -> bindParam(':keyPublic',$keyPublic);
    $insert -> bindParam(':user',$user);
    
    $insert -> execute();

    echo $genVapid
?>

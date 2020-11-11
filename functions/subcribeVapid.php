<?php
    require "../conect.php";
    require "genVapid.php";


    $getName = $_GET["jsonVapid"];
    print_r($getName);
    
    $genVapid = VapidUrl();
    

    $DatJsonIns = json_decode($genVapid);
    var_dump($DatJsonIns);
    //insertar usuario
    $insert = $conect -> prepare("INSERT INTO users (user,keyPribate,keyPublic) VALUES (:user,:keyPribate,:keyPublic)");
    
    //keys
    $user = $getName;
    $keyPribate = $DatJsonIns->{'publicKey'};
    $keyPublic = $DatJsonIns->{'pribateKey'};
     
    print($keyPribate);
    
    $insert -> bindParam(':keyPribate',$keyPribate);
    $insert -> bindParam(':keyPublic',$keyPublic);
    $insert -> bindParam(':user',$user);
    
    $insert -> execute();

    echo json_encode($genVapid);    
?>

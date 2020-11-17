<?php
    require "../conect.php";
    $sql = "SELECT * FROM  users";
    $request = $conect->prepare($sql);
    $request->execute();
    $result = $request->fetchAll();
    $json = json_encode($result);
    echo $json;   
?>
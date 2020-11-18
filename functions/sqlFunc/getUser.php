<?php
function userName($getName,$conect){
    $sql = "SELECT * FROM  users WHERE user = :USER";
    $request = $conect->prepare($sql);
    //binParam
    $request->bindParam(':USER',$getName);
    $request->execute();
    $result = $request->fetchAll();
    //print_r($result);
    $arraydata=$result;
    return $arraydata;
}
?>
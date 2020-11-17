<?php
function alluser($conect){
    $sql = "SELECT * FROM  users";
    $request = $conect->prepare($sql);
    //binParam
    $request->execute();
    $result = $request->fetchAll();
    //print_r($result);
    return $result;
}
?>
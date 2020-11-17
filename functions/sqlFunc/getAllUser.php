<?php
require '../../conect.php';
function alluser($conect){
    $sql = "SELECT * FROM  users";
    $request = $conect->prepare($sql);
    //binParam
    $request->execute();
    $result = $request->fetchAll();
    return json_encode($result);
}
 $allUser = alluser($conect);
 echo $allUser;
?>
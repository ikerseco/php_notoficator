<?php
require "../vendor/autoload.php";
require "../conect.php";
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;


$payDAt = $_POST['payload'];

$Icono = $_POST['icono']; 

$arPay = array(
    'msg' => $payDAt,
    'icon' => $Icono
);

$payload = json_encode($arPay);


function alluser($conect){
    $sql = "SELECT * FROM  users";
    $request = $conect->prepare($sql);
    //binParam
    $request->execute();
    $result = $request->fetchAll();
    return json_encode($result);
}


$alluser = alluser($conect);
echo $alluser;


$arr = [];

foreach ($alluser as $alluser) {
    $arr =  [
        'subscription' => Subscription::create([ // this is the structure for the working draft from october 2018 (https://www.w3.org/TR/2018/WD-push-api-20181026/) 
            "endpoint" => $alluser['endpoint'],
            "keys" => [
                'p256dh' => $alluser['p256dh'],
                'auth' => $alluser['auth']
            ],
        ]),
        'payload' => $payload,
        ];    
    array_push($arr);
}



/*
$arr = array(
    'msg' => $payDAt,
    'icon' => $Icono
);*/

?>
<?php
require "../vendor/autoload.php";
require "getUser.php";
require "../conect.php";
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

$name = $_GET['name'];



$select = userName($name,$conect);

//urlpoint
$urlpoint = $select[0]["urlpoint"];

//Vpribate
$keyPribate = $select[0]["keyPribate"];

//Vpublic
$keyPublic = $select[0]["keyPublic"];

//p256dh
$p256dh = $select[0]["p256dh"];

//auth
$auth = $select[0]["auth"];


print_r(strlen($keyPribate));
print_r(strlen($keyPublic));

//auth Vapid
$vapid = array(
    'VAPID' => array(
        'subject' => 'mailto:me@website.com',
        'publicKey' => 'BOVkwN3xF5zIwo-o6hmBx0a-eLU9UVB16sOfDn6hiBTvFMvVzxydvYwVioKQ7zb44NebK67hNj2a61uTwVrqMMA',
        'privateKey' => 'Jx5FZu-NRdUpIn31jqT8coKSyi0vKHB3UX7gseWU64w'
         // can be a mailto: or your website address
         // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL
    ),
);

//array of notification

$notification = [
    'subscription' => Subscription::create([ // this is the structure for the working draft from october 2018 (https://www.w3.org/TR/2018/WD-push-api-20181026/) 
        "endpoint" => $urlpoint,
        "keys" => [
            'p256dh' => $p256dh,
            'auth' => $auth
        ],
    ]),
    'payload' => '{"msg":"Hello World!"}',
];
//print_r($select[0]);

$webPush = new WebPush($vapid);
//print_r($notification[0])
print_r($notification['subscription']);
print_r($notification['payload']);

$webPush -> sendOneNotification(
    $notification['subscription'],
    $notification['payload'] // optional (defaults null)
);

//$arr = var_dump($select[5]);

/*
print_r($select["keyPublic"]);
print_r("\n");
print_r($select["keyPribate"]);
*/


//auth/
/*
$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', // can be a mailto: or your website address
        'publicKey' => '', // (recommended) uncompressed public key P-256 encoded in Base64-URL
        'privateKey' => '~44 chars', // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL
    ],
];

$webPush = new WebPush($auth);
*/
?>
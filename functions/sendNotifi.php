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

print_r(strlen($keyPribate));
print_r(strlen($keyPublic));

//auth Vapid
$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com',
        'pem' => '../private_key.pem'
         // can be a mailto: or your website address
         // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL
    ],
];

//print_r($select[0]);

$webPush = new WebPush($auth);
$webPush -> queueNotification(
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
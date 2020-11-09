<?php
require "vendor/autoload.php";
use Minishlink\WebPush\Utils;
use Minishlink\WebPush\VAPID;


echo phpinfo();

//require  'kint.phar';
//$arr = $arrName =  array('bat' => 1,"bi" => 2);
//d($arr);
//$keys = VAPID::createVapidKeys();
/*$configargs = array(
    "config" => "C:/xampp/php/extras/openssl/openssl.cnf",
    'private_key_bits'=> 2048,
    'default_md' => "sha256",
  );
  
  // Create the keypair
  $res=openssl_pkey_new($configargs);
  // Get private key
  openssl_pkey_export($res, $privKey,NULL,$configargs);
*/
$keys = VAPID::createVapidKeys();
?>
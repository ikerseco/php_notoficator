<?php
$dsn = 'mysql:dbname=stechome_mailing;host=localhost';
$usuario = 'stechome_mailing';
$contraseña = 'Simec2013';

try {
    $conect= new PDO($dsn, $usuario, $contraseña);  
    $conect-> exec("SET CHARACTER SET utf8");
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error! usuarios: " . $e->getMessage() . "<br/>";
    die();
}

?>
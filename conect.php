<?php
$dsn = 'mysql:dbname=vapikey;host=localhost';
$usuario = 'root';
$contraseña = '';

try {
    $conect= new PDO($dsn, $usuario, $contraseña);  
    $conect-> exec("SET CHARACTER SET utf8");
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error! usuarios: " . $e->getMessage() . "<br/>";
    die();
}

?>
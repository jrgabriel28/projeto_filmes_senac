<?php

$bd = 'n8_projetofilme';
$host = 'localhost';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:dbname=$bd;host=$host", $user, $pass);
    $conn->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
} catch (PDOException $ex) {
    $ex->getMessage();
}



?>
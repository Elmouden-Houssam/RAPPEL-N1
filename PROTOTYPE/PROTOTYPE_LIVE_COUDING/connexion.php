<?php

try{
$pdo = new PDO("mysql:host=localhost;dbname=restaurant_db;charset=utf8","root","houssam123");
}
catch(PDOException $e){
    echo "erreur : " . $e->getMessage();
}
?>
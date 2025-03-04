<?php
    $type='mysql';
    $server='localhost';
    $db='dev-tech';
    $port='3306';
    $charset='utf8mb4';
    $dsn="$type:host=$server;dbname=$db;port=$port;charset=$charset";

    $username='admin';
    $password='admin';
    $option=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES=>false,
    ];

    try{
        $pdo=new PDO($dsn, $username, $password, $option);
    }catch(PDOException $e){
        throw new PDOException($e->getMessage(), $e->getCode());
    }

?>
<?php

//  Configuration Database
//  =============================


$username = "root";
$password = "";
$db_config = [
  'host' => "localhost",
  'dbname' => "dawha_db",
  'port' => 3306,
  'charset' => 'utf8mb4',
];
function connect_db($config,$username,$password)
{
    $dsn = "mysql:" . http_build_query($config, '', ';');
    $conn = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    return $conn;
}


<?php

$home_page = 'home';


$config = [
    'VENDOR_PATH' => ROOT_PATH . DS . 'Vendor' . DS,
    'MODEL_PATH' => APP_PATH . DS . 'Models' . DS,
    'VIEW_PATH' => APP_PATH . DS . 'Views' . DS,
    'CONTROLLER_PATH' => APP_PATH . DS . 'Controllers' . DS,
    'DATABASE_PATH' => APP_PATH . DS . 'Database' . DS,
    'COMPONENT_PATH' => APP_PATH . DS . 'Components' . DS,
    'ASSETS_PATH' => APP_PATH . DS . 'assets' . DS,

];

$routes = [
    'web' => 'routes/web.php',
    'admin' => 'routes/admin.php',
];

$database = [
    'host' => 'localhost',
    'dbname' => 'dawha_db',
    'port' => 3306,
    'charset' => 'utf8mb4',
    'username' => 'root',
    'password' => ''
];
define('RECORDS_PER_PAGE', 10);

$uri=$_SERVER['REQUEST_URI'];
define('ROOT_ASSETS',$uri);

function asset($file)
{

    return ROOT_ASSETS . 'assets/css/' . $file;
}

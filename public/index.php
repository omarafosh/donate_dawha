<?php
defined('ROOT_PATH') || define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));
defined('APP_PATH') || define('APP_PATH', realpath(dirname(__FILE__) . '/../app'));
defined('ASSETS_PATH') || define('ASSETS_PATH', realpath(dirname(__FILE__) . '/../public/assets'));

const DS = DIRECTORY_SEPARATOR;

require_once APP_PATH . DS . 'Config' . DS . 'app.php';


require_once $config['VENDOR_PATH'] . "functions.php";
require_once $config['DATABASE_PATH'] . DS . 'database.php';

$page = bootstrap($home_page);


$model = $config['MODEL_PATH'] . $page . '.php';
$view = $config['VIEW_PATH'] . $page . '.phtml';

$controller = $config['CONTROLLER_PATH'] . ucfirst($page) . 'Controller.php';
if (file_exists($model)) {
    require $model;
}
if (file_exists($controller)) {
    require $controller;
}
if (file_exists($view)) {
    require($view);
} else {
    echo 'error';
    die();
}

$data = paginate('addvertisments', 1);


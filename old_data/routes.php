<?php
$view = "pages";
$host_name = $_SERVER['HTTP_HOST'] . "/donate/";

function route_auth($name)
{
    $url = $GLOBALS['host_name'] . $GLOBALS['view'] . '/auth/' . $name . '.php';
    return $url;
}
function route_page($name)
{
    $url = $GLOBALS['host_name'] . $GLOBALS['view'] . '/' . $name . '.php';
    return $url;
}

function route_root($name)
{
    $url =  $GLOBALS['host_name'] . '/' . $name . '.php';
    return $url;
}

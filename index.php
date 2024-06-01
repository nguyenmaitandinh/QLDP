<?php
session_start();
$controller = 'Homecontroller';
$action = 'index';
$admin = '';

if (isset($_GET['b']) && !empty($_GET['b'])) {
    $admin = true;
    $b = 'admin';
}

if (isset($_GET['c']) && !empty($_GET['c'])) {
    $controller = $_GET['c'] . 'controller';

    if (isset($_GET['a']) && !empty($_GET['a'])) {
        $action = $_GET['a'];
    }
}

require_once("./Controllers/BaseController.php");

if ($admin == false)
    require_once("./controllers/$controller.php");
else
    require_once("./admin/controllers/$controller.php");

$c = new $controller();
$c->$action();
?>

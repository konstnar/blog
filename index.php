<?php

$modules = array('index', 'articles');

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$action = isset($_GET['action']) ? $_GET['action'] : 'actionHome';

require_once __DIR__ . '/controllers/' . $controller . '.php';


$controller = new $controller();
$controller->$action();


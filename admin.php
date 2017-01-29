<?php

require __DIR__ . '/autoload.php';

$baseContrName = $_GET['c'] ?? 'News';
$base  = '\\App\\Admin\\Controllers\\' . $baseContrName;

$start = new $base;
$actionName = $_GET['m'] ?? 'Admin';


echo $start->action($actionName);


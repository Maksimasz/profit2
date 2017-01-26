<?php

use App\Controllers\News;

require __DIR__ . '/autoload.php';

$baseContrName = $_GET['c'] ?? 'News';
$base  = '\\App\\Controllers\\' . $baseContrName;

$start = new $base;
$actionName = $_GET['a'] ?? 'All';

if ('custom' == $actionName)
{
    $start->number = $_GET['number'] ?? 3;
}

echo $start->action($actionName);




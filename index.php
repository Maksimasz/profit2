<?php

use App\Controllers\News;

require __DIR__ . '/autoload.php';

$link = explode('/' , $_SERVER['REQUEST_URI']);

$baseContrName = $link[1] ?: 'News';
$base  = '\\App\\Controllers\\' . $baseContrName;

$start = new $base;
$actionName = $link[2] ?? 'All';

if (!empty($link['3']))
{
    $start->number = $link[3];
}

echo $start->action($actionName);




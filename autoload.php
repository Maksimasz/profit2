<?php



function __autoload($className)
{
    $filename = str_replace('\\', '/', $className) . '.php';
    $pach = __DIR__ . '/' . $filename;
    require $pach;
}
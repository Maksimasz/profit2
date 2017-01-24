<?php
use App\View;

require __DIR__ . '/../../autoload.php';

$view = new View();
$content =  $view->render(__DIR__ . '/Template/Admin-editor.php');

$view->content = $content;
echo $view->render( __DIR__ . '/Template/Admin.php');


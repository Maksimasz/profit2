<?php

require __DIR__ . '/autoload.php';

$view = new App\View();

$view->news  = \App\Models\Article::findCustom(3);

echo $view->render( __DIR__ .'/App/Template/News.php');

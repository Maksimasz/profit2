<?php


use App\Controllers\News;


require __DIR__ . '/autoload.php';

$full = new News();
 echo $full->articleFull($_GET['id']);





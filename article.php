<?php


use App\Controllers\OneFull;

require __DIR__ . '/autoload.php';

$full = new OneFull($_GET['id']);
 echo $full->articleFull();





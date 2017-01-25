<?php

use App\Controllers\News;

require __DIR__ . '/autoload.php';


$start = new News();

//echo $start->custom(3);

echo $start->default();
<?php

use App\Admin\Controllers\Admin;
use App\Models\Article;

require __DIR__ . '/autoload.php';

$content = new \App\Admin\Controllers\news();

$adminStart = new Admin($content->new());
echo $adminStart->display();


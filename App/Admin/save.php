<?php

use App\Admin\Controllers\Admin;

require __DIR__ . '/../../autoload.php';

$save = new \App\Admin\Controllers\Save($_POST);
$save->saveData();

$content = new \App\Admin\Controllers\news();

$adminStart = new Admin($content->new());
echo $adminStart->display();


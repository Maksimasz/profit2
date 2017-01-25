<?php
use App\Admin\Controllers\Admin;

require __DIR__ . '/../../autoload.php';

$content = new \App\Admin\Controllers\Delete($_GET['id']);

$adminDelete = new Admin($content->del());
echo $adminDelete->display();



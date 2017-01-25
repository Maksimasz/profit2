<?php
use App\Admin\Controllers\Admin;
use App\Admin\Controllers\Edit;

require __DIR__ . '/../../autoload.php';


$content = new Edit($_GET['id']);
$adminEdit = new Admin($content->redit());
echo $adminEdit->display();
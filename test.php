<?php

require __DIR__ .  '/../autoload.php';

$incert = "INSERT INTO `news`(`title`, `text`) VALUES ('тест заголовка','тест текста')";
$update = "UPDATE `authors` SET `firstname`= 'тест имени' WHERE id = :id";

$db_test = new \App\Db();

assert( is_object($db_test) );
assert($db_test->execute($incert,[]));
assert($db_test->execute($update,[':id' => 1]));





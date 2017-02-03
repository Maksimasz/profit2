<?php
class PropertyTest
{
    /**  Место хранения перегружаемых данных.  */
    private $data = array();

    /**  Здесь перегрузка будет использована только при доступе вне класса.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Установка '$name' в '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Получение '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

    }

    /**  Начиная с версии PHP 5.1.0  */
    public function __isset($name)
    {
        echo "Установлено ли '$name'?\n";
        return isset($this->data[$name]);
    }

}


//echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a . "\n\n";

//var_dump(isset($obj->a));

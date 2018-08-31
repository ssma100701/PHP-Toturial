<?php
class MyClass {
    const CONST_VALUE = 'A constant value';
    
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // 自 PHP 5.3.0 起
echo '<br>';
echo MyClass::CONST_VALUE;
echo '<br>';

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "<br>";
        echo self::$my_static . "<br>";
    }
}

$classname = 'OtherClass';
echo $classname::doubleColon(); // 自 PHP 5.3.0 起

OtherClass::doubleColon();
?> 
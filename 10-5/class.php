<?php
class MyClass {
    public $a = 1;
    function __construct ($a,$b,$c) {
        $this->a = $a;
        echo "构造函数";
    }
    
    function getA () {
        return $this->a;
    }
}

$b = new MyClass(33, 2, 1);
?>
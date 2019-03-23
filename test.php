<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        //parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;

    public function sayHello() {
        echo "test" . __FUNCTION__;
        echo "sss";
        echo PHP_EOL;
        echo "sss";
    }
}

$o = new MyHelloWorld();
$o->sayHello();
?>
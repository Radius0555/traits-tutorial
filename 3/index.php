<?php

trait Hello{
  public function sayHello(){
    echo 'Hello';
  }
}

trait World{
  public function sayWorld(){
    echo ' World';
  }
}

class MyHello{
  use Hello, World;
  public function say(){
    echo ' !';
  }
}

$o = new MyHello();
$o->sayHello();
$o->sayWorld();
$o->say();

?>

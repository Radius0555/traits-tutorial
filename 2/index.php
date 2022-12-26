<?php

trait HelloWorld{
  public function sayHello(){
    echo 'Hello World!';
  }
}

class TheWorld{
  use HelloWorld;
  public function sayHello(){
    echo 'Hello Universe!';
  }
}

$o = new TheWorld();
$o->sayHello();

?>

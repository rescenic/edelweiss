<?php

class Animal {
    function eat() {
        echo "Eating...<br>";
    }
}

class Walkable {
    function walk() {
        echo "Walking...<br>";
    }
}

class Swimmable {
    function swim() {
        echo "Swimming...<br>";
    }
}

class Flyable {
    function fly() {
        echo "Flying...<br>";
    }
}

class Fish {

    var $animal;
    var $swimmable;

    function __construct() {
        $this->animal = new Animal();
        $this->swimmable = new Swimmable();
    }
}

class Bird {

    var $animal;
    var $walkable;
    var $swimmable;
    var $flyable;

    function __construct() {
        $this->animal = new Animal();
        $this->walkable = new Walkable();
        $this->swimmable = new Swimmable();
        $this->flyable = new Flyable();
    }
}

echo "Nemo the fish's activities:<br>";
$nemo = new Fish();
$nemo->animal->eat();
$nemo->swimmable->swim();
echo "<br>";

echo "Tweety the bird's activities:<br>";
$tweety = new Bird();
$tweety->animal->eat();
$tweety->walkable->walk();
$tweety->swimmable->swim();
$tweety->flyable->fly();

?>
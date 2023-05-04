<?php

abstract class Animal {
    abstract  public function makeSound();
    abstract public function eat();
}


class Katze extends Animal {
  public function makeSound() {
    echo " Meow! ";
  }
  public function eat() {
    echo " The cat is eating ";
  }
}

class Hund extends Animal {
  public function makeSound() {
    echo "Woof!";
  }
  public function eat() {
    echo " The dog is eating ";
  }
}



$katze = new Katze();
$hund = new Hund();

$animals = array($katze, $hund);


foreach($animals as $animal) {
  $animal->makeSound();
}
echo "<br>";
foreach($animals as $animal) {
    $animal->eat();
  }
?>
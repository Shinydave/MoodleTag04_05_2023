<?php
class Person {
    
    private $name;
    private $age;
    

    public function getName(){
        return $this->name;
    }
    public function setName($x){
        $this->name = $x;
    }

    public function getAge(){
        return $this->age;
    }
    public function setAge($x){
        $this->age = $x;
    }

}
// hier erstellen wir ein Objekt
$person = new Person("","","");

// hier stellen wir die Werte ein mit Set
$person -> setAge(44);
$person -> setName("Commander Riker");

// hier geben wir die Werte mit Echo aus
echo $person->getName();
echo "<br>";
echo $person->getAge();
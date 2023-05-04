<?php
class Person {
    
    public $name;
    public $age;
    public $gender;

    public function __construct($name,$age,$gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;

    }
 public function displayInfo(){
    $this-> name;
    $this-> age;
    $this-> gender;

    foreach($this as $displayInfo){
        echo $displayInfo."<br>";
    } 

 }
}

class Student extends Person{
    public $studentID;
    public $course;

    public function __construct($studentID,$course)
    {
        $this->studentID = $studentID;
        $this->$course = $course;
        

    }
public function displayInfo(){
    $this-> studentID;
    $this-> course;
    

    foreach($this as $displayInfo){
        echo $displayInfo."<br>";
    } 

    }

}

class Teacher extends Person{
    public $teacherID;
    public $subject;


    public function __construct($teacherID,$subject)
    {
        $this->teacherID = $teacherID;
        $this->$subject = $subject;
        }

        public function displayInfo(){
            $this-> teacherID;
            $this-> subject;
            

            foreach($this as $displayInfo){
                echo $displayInfo."</br>";
            } 

            }
}
echo "<pre>";
$Person = new Person("Dave",33,"male");

echo $Person->displayInfo();

$Student = new Student (1234,5);

echo $Student->displayInfo();

$Teacher = new Teacher(12,"Php");

echo $Teacher->displayInfo();
echo "</pre>";
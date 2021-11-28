<?php

use Student as GlobalStudent;

class Student{

    public $first_name;
    public $last_name;
    public $country = "None";

    protected $registration_id;
    private $tuition = 500.00;

    public function hello_world(){
        return "Hello world";
    }

    public function full_name(){
        return $this->first_name . " " . $this->lastname;
    }

    protected function hello_family(){
        return "Hello family";
    }

    private function hello_me(){
        return "Hello me";
    }

    public function tuition_fmt(){
        return '$' . $this->tuition;
    }
}

class PartTimeStudent extends Student{
    public function hello_parent(){
        return $this->hello_family();
    }

}

// $student1 = new Student;
$student1 = new PartTimeStudent;
$student1 -> first_name = 'Lucy';
$student1 -> last_name = 'Ricardo';


echo $student1->full_name() . "<br />";
echo $student1->hello_world() . "<br />";

// Will generate error
// echo $student1->hello_family() . "<br />";
// echo $student1->hello_me() . "<br />";

 echo $student1->hello_parent() . "<br />";

// Overloading:
// 1. Get value of undefined property: notice
// 2. Set value of undefined property: define and set
// 3. Private properties may seem to be visible in subclasses
$student1->tuition = 10000;
echo $student1->tuition . "<br />";
echo $student1->tuition_fmt() . "<br />";

?>
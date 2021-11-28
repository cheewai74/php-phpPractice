<?php

use Student as GlobalStudent;

class Student{
        public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
        private static $total_students = 0;

        public static function count(){
            return self::$total_students;
        }

        public static function add_student(){
            return self::$total_students++;
        }

        public static function motto(){
            return "To learn PHP OOP";
        }

    }

    echo Student::$grades[0] . "<br />";
    echo Student::motto() . "<br />";
    echo Student::count() . "<br />";
    echo Student::add_student() . "<br />";
    echo Student::count() . "<br />";
    echo Student::add_student() . "<br />";
    echo Student::count() . "<br />";

?>
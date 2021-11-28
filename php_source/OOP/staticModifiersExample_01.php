<?php

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

    // Static propertises and methods are inherited.
    class PartTimeStudent extends Student {

    }

    echo PartTimeStudent::$grades[0] . "<br />";
    echo PartTimeStudent::motto() . "<br />";

    // Changes are shared too.
    PartTimeStudent::$grades[] = 'Alumni';
    echo implode(',',Student::$grades);

    Student::add_student() . "<br />";
    Student::add_student() . "<br />";
    Student::add_student() . "<br />";
    PartTimeStudent::add_student() . "<br />";

    echo Student::count() . "<br />";
    echo PartTimeStudent::count() . "<br />";

?>
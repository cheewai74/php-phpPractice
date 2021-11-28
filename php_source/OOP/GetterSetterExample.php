<?php

class Product{
    private $name;

    public function set_name($value){
        $this->name = $value;
    }

    public function get_name(){
        return $this->name;
    }
}

$p = new Product;
echo $p->set_name('Birdhouse');
echo $p->get_name();

?>
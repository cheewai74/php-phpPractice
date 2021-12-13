<?php
namespace TDD;
class Reciept {
    public function total(array $items = []){
        return array_sum($items);
    }
}
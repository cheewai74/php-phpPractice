<?php declare(strict_types=1);
require 'php_source\PHPUnit\vendor\autoload.php';
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase{

    public function testEmpty(): array
    {
        $stack =[];
        $this-> assertEmpty($stack);
        return $stack;
    }
}

?>
<?php

/*

Write your first PHPUnit test method:
-Create a test class called ExampleTest, making sure you extend the correct parent class
-Add a test method called testTrueIsTrue
-Add an assertiong using the assertTrue method on the literal boolean value true

*/

use PHPUnit\Framework\TestCase;

class MyFirstTest extends TestCase
{
    
    public function testTrueisTrue()
    {
        $this->assertTrue(true, true);
        
    }
}
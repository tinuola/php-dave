<?php

# 02 - Testing a function


use PHPUnit\Framework\TestCase;

// Test class
class FunctionTest extends TestCase {
    
    // Make test name as verbose as possible
    // Test method
    public function testAddReturnsTheCorrectSum()
    {

        // To be able to test function, it must be required in the test method:
        require 'functions.php';

        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(8, add(3, 5));

    }

    // Checking the incorrect results are not returned
    public function testAddDoesNotReturnTheIncorrectSum()
    {

        $this->assertNotEquals(5, add(2, 2));

    }
}
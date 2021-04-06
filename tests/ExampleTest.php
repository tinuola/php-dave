<?php

# 01 - Writing a Unit Test

use PHPUnit\Framework\TestCase;

// class ExampleTest extends \PHPUnit\Framework\TestCase
// {

// }

// Test class
class ExampleTest extends TestCase 
{

    // Test method
    public function testAddingTwoPlusTwoResultsInFour(){
        // Call assert method on current object
        // first argument is expected value, then actual value to compare

        $this->assertEquals(4, 2 + 2);

        // This test will fail
        // $this->assertEquals(5, 2 + 2);
    }
}

// To write test, create a test that extends phpunit test case class
// add public method that start with "test"
// write assertions that test the code
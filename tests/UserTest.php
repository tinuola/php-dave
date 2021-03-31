<?php
# Testing a Class


use PHPUnit\Framework\TestCase;

// Test class
class UserTest extends TestCase 
{

    // Test method
    public function testReturnsFullName ()
    {
        // Removing this require statement because added with autoloading in composer.json
        // require 'User.php';

        // Create new user
        $user = new User;

        // Set properties
        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals("Teresa Green", $user->getFullName());

    }

    public function testFullNameIsEmptyByDefault()
    {
        // No need to require User class file
        // Test methods run in order; so if it's been loaded in previous method it'll be available for use here

        $user = new User;

        $this->assertEquals('', $user->getFullName());

    }

    // A test method without the starting phrase "test"
    // public function userHasFirstName()

    // public function testUserHasFirstName()


    // Add doc block with @test annotation tells phpunit that it is a test to be excecuted

    /**
     * @test
     */
    public function user_has_first_name()
    {
        $user = new User;

        $user->first_name = "Mikey";

        $this->assertEquals('Mikey', $user->first_name);
    }
    // PHPunit will not run a test method that doesn't start with test

}
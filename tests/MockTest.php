<?php

# For Mailer

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase {

    public function testMock(){

        // Before creating mock object, this is example of how to use mailer class

        // $mailer = new Mailer;

        // $result = $mailer->sendMessage('dave@example.com', 'Hello');

        // var_dump($result);

        // ====
        // Create mock version of mailer class

        // use createMock method, passing the name of class we're mocking; this mock object contains all the properties and methods of the original, but don't do anything, only return null as a value

        // mock methods sendMessage are known as stubs and replace original method from mocked class

        $mock = $this->createMock(Mailer::class);

        // Change stubs to return something else other than null
        // do this before calling method
        $mock->method('sendMessage')
            ->willReturn(true);

        $result = $mock->sendMessage('dave@example.com', 'Hello');

        // var_dump($result);
    $this->assertTrue($result);        



    }
}
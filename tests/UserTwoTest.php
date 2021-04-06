<?php
# 07 - Dependency Injection


use PHPUnit\Framework\TestCase;

class UserTwoTest extends TestCase 
{


    public function testReturnsFullName ()
    {
        $user = new UserTwo;

        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals("Teresa Green", $user->getFullName());

    }

    public function testFullNameIsEmptyByDefault()
    {

        $user = new UserTwo;

        $this->assertEquals('', $user->getFullName());

    }

    public function testNotificationIsSent(){

        $user = new UserTwo;

        // Create mock of mailer class
        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->expects($this->once())
            ->method('sendMessage')
            // ->with($this->equalTo('david@example.com'), $this->equalTo('Hello'))
            ->with($this->equalTo('dave@example.com'), $this->equalTo('Hello'))
            ->willReturn(true);

        $user->setMailer($mock_mailer);

        $user->email = 'dave@example.com';

        // $user->notify('Hello');

        $this->assertTrue($user->notify('Hello'));
    }

    // For section 5.22
    public function testCannotNotifyUserWithNoEmail(){
        $user = new UserTwo;

        // $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->setMethods(null)
                            // ->setMethods(['sendMessage'])
                            ->getMock();


        // $mock_mailer->method('sendMessage')
        //     ->will($this->throwException(new Exception));

        // Inject dependency into the user object
        $user->setMailer($mock_mailer);

        $this->expectException(Exception::class);

        // Call notify method
        $user->notify('Hello');

    }

}
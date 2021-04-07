<?php

# 6.24

use PHPUnit\Framework\TestCase;

// class OrderTest extends TestCase{

//     public function testOrderIsProcessed(){

//         // $gateway = $this->createMock('PaymentGateway');
//         cannot use createMock to mock a non-existent class(yet)

//         $gateway = $this->getMockBuilder('PaymentGateway')
//                         ->setMethods(['charge'])
//                         ->getMock();

//         $gateway->expects($this->once())
//                 ->method('charge')
//                 ->with($this->equalTo(200))
//                 ->willReturn(true);

//         $order = new Order($gateway);

//         $order->amount = 200;

//         $this->assertTrue($order->process());
        
//     }
// }


/*
composer require mockery/mockery --dev

,
    "require-dev": {
        "phpunit/phpunit": "9.5.0",
        "mockery/mockery": "^1.4"
    }
*/


// Mockery - tear down method
class OrderTest extends TestCase{

    public function tearDown(): void{

        Mockery::close();
    
    }

    public function testOrderIsProcessed(){

        $gateway = $this->getMockBuilder('PaymentGateway')
                        ->setMethods(['charge'])
                        ->getMock();

        $gateway->expects($this->once())
                ->method('charge')
                ->with($this->equalTo(200))
                ->willReturn(true);

        $order = new Order($gateway);

        $order->amount = 200;

        $this->assertTrue($order->process());
        
    }

    public function testOrderIsProcessedUsingMockery(){

        $gateway = Mockery::mock('PaymentGateway');

        $gateway->shouldReceive('charge')
                ->once()
                ->with(200)
                ->andReturn(true);

        $order = new Order($gateway);

        $order->amount = 200;

        $this->assertTrue($order->process());

    }
}
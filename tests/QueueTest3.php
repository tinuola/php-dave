<?php
# Setting up fixtures

use PHPUnit\Framework\TestCase;

class QueueTest3 extends TestCase 
{

    // Can be public
    // Will be called before each test method
    // We can remove test dependencies from test class

    // The known state/fixture for each method is an empty queue object, so:
    // 1. set up a queue object
    protected $queue;

    protected function setUp(): void 
    {
        // 2. assign new queue object to this property
        $this->queue=new Queue;

    }

    // Runs after each test; code to clean up after each test
    // This method is not needed often; only in certain cases
    protected function tearDown(): void
    {
        unset($this->queue);
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $this->queue->push('yellow');
        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue()
    {
        $this->queue->push('yellow');
        $item = $this->queue->pop();
        $this->assertEquals(0, $this->queue->getCount());
        $this->assertEquals('yellow', $item);
    }
}

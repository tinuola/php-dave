<?php
# Easily add new test using test fixtures

use PHPUnit\Framework\TestCase;

class QueueTest4 extends TestCase 
{
    protected $queue;

    protected function setUp(): void 
    {
        $this->queue=new Queue;
    }

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

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        // Add two items to queue
        $this->queue->push('first');
        $this->queue->push('second');
        $this->assertEquals('first', $this->queue->pop());
    }
}

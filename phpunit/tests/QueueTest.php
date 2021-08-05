<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase 
{
    public function testNewQueueIsEmpty()
    {
        // Create new Queue object

        $queue = new Queue;

        $this->assertEquals(0, $queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $queue = new Queue;

        // Call push method
        $queue->push('yellow');

        // Assert count 
        $this->assertEquals(1, $queue->getCount());

    }

    public function testAnItemIsRemovedFromTheQueue()
    {
        $queue = new Queue;
        $queue->push('yellow');
        // $queue->pop()

        // This returns the item removed
        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());

        // Make sure item removed is the one added initially
        $this->assertEquals('yellow', $item);
    }
}
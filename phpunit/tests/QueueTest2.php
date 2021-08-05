<?php
# Making test methods dependent on each other

use PHPUnit\Framework\TestCase;

class QueueTest2 extends TestCase 
{

    // Test methods others are dependent on is the PRODUCER

    public function testNewQueueIsEmpty()
    {
        // Create new Queue object

        $queue = new Queue;

        $this->assertEquals(0, $queue->getCount());

        // Return queue object
        return $queue;
    }


    // Add comment block that contains @depends annotation to make 2nd test dependent on first 

    /**
     * @depends testNewQueueIsEmpty
     */


    //  Tests that dependend on others are known as CONSUMER

    //  Value returned passed as argument in second method; type hint to specify data type

    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {
        // Call push method
        $queue->push('yellow');

        // Assert count 
        $this->assertEquals(1, $queue->getCount());

        return $queue;

    }

    /** 
     * @depends testAnItemIsAddedToTheQueue
     */

    public function testAnItemIsRemovedFromTheQueue(Queue $queue)
    {
        
        // This returns the item removed
        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());

        // Make sure item removed is the one added initially
        $this->assertEquals('yellow', $item);
    }
}
<?php
# Share fixture between tests for resource intensive data

use PHPUnit\Framework\TestCase;

class QueueTest5 extends TestCase 
{
    // Change queue property to static to match setupbefore/teardownafter methods
    protected static $queue;

    protected function setUp(): void 
    {
        // no longer needed because of queue object set up in setUpBeforeClass
        // $this->queue=new Queue;

        // empties the queue before each test method - line 81 in queue.php
        static::$queue->clear();
    }

    // setupbefore run before first test and teardownafter runs after last test; each is executed once

    public static function setUpBeforeClass(): void
    {

        static::$queue = new Queue;
    }

    public static function tearDownAfterClass(): void
    {
        static::$queue = null;
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        static::$queue->push('yellow');
        $this->assertEquals(1, static::$queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue()
    {
        static::$queue->push('yellow');
        $item = static::$queue->pop();
        $this->assertEquals(0, static::$queue->getCount());
        $this->assertEquals('yellow', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        static::$queue->push('first');
        static::$queue->push('second');
        $this->assertEquals('first', static::$queue->pop());
    }
}

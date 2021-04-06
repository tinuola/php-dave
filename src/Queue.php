<?php
# 04 - Unit Testing a Queue Class

/**
 * Queue
 * 
 * A first-in, first-out data structure
 */

class Queue 
{

    /**
     * Maximum number of items in the queue
     * @var integer
     */
    public const MAX_ITEMS = 5;

    /**
     * Queue items
     * 
     * @var array
     */
    protected $items = [];

    /**
     * Add an item to the end of the queue
     * 
     * @param mixed $item The item
     */
    // public function push($item)
    // {
    //     $this->items[] = $item;
    // }


    // For Exception exercise
    /**
     * Add an item to the end of the queue
     * 
     * @param mixed $item The item
     * 
     * @throws QueueException if the number of items on the queue exceeds the MAX_ITEMS value
     * 
     */
    public function push($item)
    {
        if($this->getCount() == static::MAX_ITEMS){
            throw new QueueException('Queue is full');
        }
        $this->items[] = $item;
    }



    /**
     * Take an item off the head of the queue
     * 
     * @return mixed The item
     */
    public function pop()
    {
        // return array_pop($this->items);

        // To fix bug for queuetest4
        return array_shift($this->items);
    }

    /**
     * Get the total number of items in the queue
     * 
     * @return integer The number of items
     */
    public function getCount()
    {
        return count($this->items);
    }

    // for queuetest5
    // Add method to clear the queue
    public function clear()
    {
        $this->items = [];
    }

}
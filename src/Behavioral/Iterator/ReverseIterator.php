<?php

namespace DesignPatterns\Behavioral\Iterator;

/**
 * Конкретный итератор.
 * \Iterator is built-in PHP interface
 */
class ReverseIterator implements \Iterator
{
    /**
     * Collection instance
     * @var SimpleCollection
     */
    private $collection;
    
    /**
     * @var int Stores the current traversal position
     */
    private $position = 0;
    
    public function __construct(MyCollection $collection)
    {
        $this->collection = $collection;
    }
    
    /**
     * Rewind the Iterator to the first element
     */
    public function rewind()
    {
        $this->position = count($this->collection->getItems()) - 1;
    }
    
    /**
     * Return the current element
     */
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }
    /**
     * Return the key of the current element
     */
    public function key()
    {
        return $this->position;
    }
    /**
     * Move forward to next element
     */
    public function next()
    {
        $this->position = $this->position - 1;
    }
    /**
     * Checks if current position is valid
     */
    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
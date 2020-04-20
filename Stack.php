<?php


class Stacks
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function isFull()
    {
        return count($this->stack) == $this->limit;
    }

    public function push($value)
    {
        if (!$this->isFull()) {
            array_push($this->stack, $value);
        } else {
            throw new Exception('Stack is full !');
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        } else {
            throw new Exception('Stack is empty !');
        }
    }
}
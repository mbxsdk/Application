<?php

namespace Mibexx\Application\Business\Router\Handler;


class RouterHandlerCollection implements \Iterator, \Countable
{
    /**
     * @var array
     */
    private $handler;

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @param HandlerInterface $handler
     *
     * @return $this
     */
    public function add(HandlerInterface $handler)
    {
        $this->handler[] = $handler;

        return $this;
    }

    /**
     * @return HandlerInterface
     */
    public function current()
    {
        return $this->handler[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->handler[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->handler);
    }

}
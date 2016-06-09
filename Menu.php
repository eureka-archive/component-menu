<?php

/**
 * Copyright (c) 2010-2016 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Menu;

/**
 * Menu class
 *
 * @author  Romain Cottard
 * @version 1.0.0
 */
class Menu implements \Iterator, \Countable
{
    /**
     * @var int $index
     */
    private $index = 0;

    /**
     * @var int $count
     */
    private $count = 0;

    /**
     * @var int[] $names
     */
    private $names = array();

    /**
     * @var MenuItem[] $collection
     */
    private $collection = array();

    /**
     * Add item.
     *
     * @param MenuItem $item
     * @return $this
     */
    public function add(MenuItem $item)
    {
        $this->collection[$this->count] = $item;
        $this->names[$item->getName()]  = $this->count;

        $this->count++;

        return $this;
    }

    /**
     * Get menu item by name.
     *
     * @param  string $name
     * @return MenuItem
     */
    public function getItem($name)
    {
        $index = $this->names[$name];

        return $this->collection[$index];
    }

    /**
     * Current iterator method.
     *
     * @return MenuItem
     */
    public function current()
    {
        return $this->collection[$this->index];
    }

    /**
     * Key iterator method.
     *
     * @return int
     */
    public function key()
    {
        return $this->index;
    }

    /**
     * Next iterator method.
     *
     * @return void
     */
    public function next()
    {
        $this->index++;
    }

    /**
     * Rewind iterator method.
     *
     * @return void
     */
    public function rewind()
    {
        $this->index = 0;
    }

    /**
     * Valid iterator method.
     *
     * @return bool
     */
    public function valid()
    {
        return ($this->index < $this->count);
    }

    /**
     * Count countable method.
     * @return int
     */
    public function count()
    {
        return $this->count;
    }
}
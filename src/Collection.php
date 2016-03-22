<?php

namespace Mundanity\Collection;


/**
 * Implements a basic collection from an array.
 *
 */
class Collection implements CollectionInterface
{
    /**
     * The data in the collection.
     *
     * @var array
     *
     */
    protected $data = [];


    /**
     * Constructor
     *
     * @param array $data
     *   An array of data to populate the collection with. Note that existing
     *   indexes are removed. If indexes are significant, use KeyedCollection
     *   instead.
     *
     */
    public function __construct(array $data = [])
    {
        $this->data = array_values($data);
    }


    /**
     * {@inheritdoc}
     *
     */
    public function has($item)
    {
        return in_array($item, $this->data);
    }


    /**
     * {@inheritdoc}
     *
     */
    public function getWhere(callable $callable)
    {
        foreach ($this->data as $item) {
            if ($callable($item) === true) {
                return is_object($item) ? clone $item : $item;
            }
        }
    }


    /**
     * {@inheritdoc}
     *
     */
    public function getAtIndex($index)
    {
        if (!is_numeric($index)) {
            return;
        }

        return isset($this->data[$index]) ? $this->data[$index] : null;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function isEmpty()
    {
        return empty($this->data);
    }


    /**
     * Returns the number of items within the collection.
     *
     * @return int
     *
     */
    public function count()
    {
        return count($this->data);
    }


    /**
     * Returns an iterator.
     *
     * @return \Traversable
     *
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }


    /**
     * {@inheritdoc}
     *
     */
    public function toArray()
    {
        return $this->data;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function filter(callable $callable)
    {
        $data = array_filter($this->data, $callable, ARRAY_FILTER_USE_BOTH);
        return new static($data);
    }


    /**
     * {@inheritdoc}
     *
     */
    public function map(callable $callable)
    {
        return array_map($callable, $this->data);
    }
}

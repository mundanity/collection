<?php

namespace Mundanity\Collection;


/**
 * Interface for a collection.
 *
 */
interface CollectionInterface extends \Countable, \IteratorAggregate
{
    /**
     * Determines if the item exists within the collection.
     *
     * @param mixed $item
     *   The item to check.
     *
     * @return boolean
     *
     */
    public function has($item);


    /**
     * Determines if the collection is empty or not.
     *
     * @return boolean
     *
     */
    public function isEmpty();


    /**
     * Returns the collection as an array.
     *
     * @return array
     *
     */
    public function toArray();


    /**
     * Filters the collection using the provided callable.
     *
     * @param callable $callable
     *   The callable to use as the filter function.
     *
     * @return static
     *
     * @see http://php.net/array_filter
     *
     */
    public function filter(callable $callable);


    /**
     * Maps the collection using the provided callable.
     *
     * @param callable $callable
     *   The callable to use as the mapping function.
     *
     * @return array
     *
     * @see http://php.net/array_map
     *
     */
    public function map(callable $callable);
}

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
     * Returns the first matching item in the collection.
     *
     * @param callable $callable
     *   The callable to use to query for the item. If the callable returns
     *   true, the item will be returned. Each item in the collection will be
     *   passed to the callable as the first parameter.
     *
     * @return mixed|null
     *   The matched item, or null if no items match the callable.
     *
     */
    public function getWhere(callable $callable);


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
     *   The callable to use as the filter function. The callable will be passed
     *   each item in the collection as the first parameter, and the item's key
     *   as the second parameter.
     *
     * @return static
     *
     */
    public function filter(callable $callable);


    /**
     * Maps the collection using the provided callable.
     *
     * @param callable $callable
     *   The callable to use as the mapping function. Each item in the
     *   collection will be passed to the callable as the first parameter.
     *
     * @return array
     *
     */
    public function map(callable $callable);
}

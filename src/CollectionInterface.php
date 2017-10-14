<?php

namespace Mundanity\Collection;


/**
 * Interface for a collection.
 *
 */
interface CollectionInterface extends \Countable, \IteratorAggregate
{
    /**
     * Static factory method to create a new collection from an existing one.
     * Useful for creating a read only copy of a mutable collection, or vice
     * versa.
     *
     * @param CollectionInterface $collection
     *   A collection.
     *
     * @return static
     *
     */
    public static function fromCollection(CollectionInterface $collection);


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
     * Returns an item at the specified index.
     *
     * @param int $index
     *   The numerical index to return a value in the collection for.
     *
     * @return mixed|null
     *   The matched item, or null if the index is out of range.
     *
     */
    public function getAtIndex($index);


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
     * @return static
     *
     */
    public function map(callable $callable);


    /**
     * Reduces the collection to a single value using the provided callable.
     *
     * @param callable $callable
     *   The callable to use to as the reduction function. The callable will
     *   receive the previous result of the reduction and the item in the
     *   collection as parameters.
     * @param mixed $initial
     *   The optional initial value to use at the beginning of the process. If
     *   the collection is empty, this will also be the final result.
     *
     * @return mixed
     *
     */
    public function reduce(callable $callable, $initial = null);
}

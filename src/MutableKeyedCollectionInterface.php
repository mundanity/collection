<?php

namespace Mundanity\Collection;


/**
 * Interface for a mutable keyed collection.
 *
 */
interface MutableKeyedCollectionInterface extends KeyedCollectionInterface
{
    /**
     * Adds an item to the collection.
     *
     * @param mixed $key
     *   The key of the item to add.
     * @param mixed $item
     *   The item to add.
     *
     * @return self
     *
     */
    public function add($key, $item);


    /**
     * Removes an item from the collection.
     *
     * @param mixed $item
     *   The item to remove.
     *
     * @return self
     *
     */
    public function remove($item);


    /**
     * Removes an item from the collection by its key.
     *
     * @param mixed $key
     *   The key of the item to remove.
     *
     * @return self
     *
     */
    public function removeByKey($key);
}

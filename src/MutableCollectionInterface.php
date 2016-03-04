<?php

namespace Mundanity\Collection;


/**
 * Interface for a mutable collection.
 *
 */
interface MutableCollectionInterface extends CollectionInterface
{
    /**
     * Adds an item to the collection.
     *
     * @param mixed $item
     *   The item to add.
     *
     * @return self
     *
     */
    public function add($item);


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
}

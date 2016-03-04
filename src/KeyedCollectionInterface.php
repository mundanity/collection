<?php

namespace Mundanity\Collection;


/**
 * An interface for a keyed collection.
 *
 */
interface KeyedCollectionInterface extends CollectionInterface
{
    /**
     * Determines if the item exists in the collection, based on its key.
     *
     * @param mixed $key
     *   The key to check.
     *
     * @return boolean
     *
     */
    public function hasKey($key);
}

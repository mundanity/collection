<?php

namespace Mundanity\Collection;


/**
 * A keyed collection.
 *
 */
class KeyedCollection extends Collection implements KeyedCollectionInterface
{
    /**
     * {@inheritdoc}
     *
     */
    public function hasKey($key)
    {
        return array_key_exists($key, $this->data);
    }
}

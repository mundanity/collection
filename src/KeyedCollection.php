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


    /**
     * {@inheritdoc}
     *
     */
    public function getByKey($key)
    {
        if ($this->hasKey($key)) {
            return is_object($this->data[$key]) ? clone $this->data[$key] : $this->data[$key];
        }
    }
}

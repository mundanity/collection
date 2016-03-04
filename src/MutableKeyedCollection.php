<?php

namespace Mundanity\Collection;


/**
 * A mutable keyed collection.
 *
 */
class MutableKeyedCollection extends KeyedCollection implements MutableKeyedCollectionInterface
{
    /**
     * {@inheritdoc}
     *
     */
    public function add($key, $item)
    {
        $this->data[$key] = $item;
        return $this;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function remove($item)
    {
        if ($key = array_search($item, $this->data, true)) {
            unset($this->data[$key]);
        }
        return $this;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function removeByKey($key)
    {
        if (array_key_exists($key, $this->data)) {
            unset($this->data[$key]);
        }
        return $this;
    }
}

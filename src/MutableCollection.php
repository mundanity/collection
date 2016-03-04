<?php

namespace Mundanity\Collection;


/**
 * A mutable collection.
 *
 */
class MutableCollection extends Collection implements MutableCollectionInterface
{
    /**
     * {@inheritdoc}
     *
     */
    public function add($item)
    {
        $this->data[] = $item;
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
}

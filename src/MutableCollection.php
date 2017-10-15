<?php

namespace Mundanity\Collection;


/**
 * A mutable collection.
 *
 */
class MutableCollection extends Collection implements MutableCollectionInterface
{
    use MutableTrait;

    /**
     * {@inheritdoc}
     *
     */
    public function add($item)
    {
        $this->data[] = $item;
        return $this;
    }
}

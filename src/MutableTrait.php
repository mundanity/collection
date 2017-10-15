<?php

namespace Mundanity\Collection;


/**
 * Captures mutable methods applicable.
 *
 */
trait MutableTrait
{
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
    public function filter(callable $callable)
    {
        $collection = parent::filter($callable);
        $this->data = $collection->toArray();

        return $this;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function map(callable $callable)
    {
        $collection = parent::map($callable);
        $this->data = $collection->toArray();

        return $this;
    }
}

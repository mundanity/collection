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
        $this->data = parent::filter($callable)
            ->toArray();

        return $this;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function map(callable $callable)
    {
        $this->data = parent::map($callable)
            ->toArray();

        return $this;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function diff(CollectionInterface ...$collection)
    {
        $this->data = parent::diff(...$collection)
            ->toArray();

        return $this;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function intersect(CollectionInterface ...$collection)
    {
        $this->data = parent::intersect(...$collection)
            ->toArray();

        return $this;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function merge(CollectionInterface ...$collection)
    {
        $this->data = parent::merge(...$collection)
            ->toArray();

        return $this;
    }
}

<?php

namespace Mundanity\Collection;


/**
 * A keyed collection.
 *
 */
class KeyedCollection extends Collection implements KeyedCollectionInterface
{
    /**
     * Constructor
     *
     * @param array $data
     *   An array of data to populate the collection with.
     *
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function getAtIndex($index)
    {
        if (!is_numeric($index)) {
            return;
        }

        $values = array_values($this->data);
        return isset($values[$index]) ? $values[$index] : null;
    }


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

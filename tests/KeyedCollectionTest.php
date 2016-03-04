<?php

use Mundanity\Collection\KeyedCollection;


class KeyedCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testHasKey()
    {
        $collection = new KeyedCollection(['key' => 'value']);
        $this->assertTrue($collection->hasKey('key'));

        $collection = new KeyedCollection();
        $this->assertFalse($collection->hasKey('key'));
    }
}

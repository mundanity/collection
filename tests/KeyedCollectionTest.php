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


    public function testGetByKey()
    {
        $collection = new KeyedCollection();
        $this->assertNull($collection->getByKey('key'));

        $collection = new KeyedCollection(['key' => 'value']);
        $this->assertEquals('value', $collection->getByKey('key'));

        $item = new \StdClass;
        $item->property = 'value';
        $collection = new KeyedCollection(['key' => $item]);
        $this->assertEquals($item, $collection->getByKey('key'));
        $this->assertNotSame($item, $collection->getByKey('key'));
    }
}

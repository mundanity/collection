<?php

use Mundanity\Collection\KeyedCollection;


class KeyedCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testGetAtIndex()
    {
        $collection = new KeyedCollection([
            'key1' => 'item1',
            'key2' => 'item2',
        ]);

        $this->assertEquals('item2', $collection->getAtIndex(1));
        $this->assertCount(2, $collection);

        $collection = new KeyedCollection(['key1' => 'item1']);
        $this->assertNull($collection->getAtIndex(1));

        $collection = new KeyedCollection(['key1' => 'item1']);
        $this->assertNull($collection->getAtIndex('potato'));
    }


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

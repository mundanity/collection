<?php

use Mundanity\Collection\Collection;


class CollectionTest extends PHPUnit_Framework_TestCase
{
    public function testHasReturnsTrue()
    {
        $collection = new Collection(['item1']);
        $this->assertTrue($collection->has('item1'));

        $collection = new Collection();
        $this->assertFalse($collection->has('item'));
    }


    public function testIsEmpty()
    {
        $collection = new Collection();
        $this->assertTrue($collection->isEmpty());

        $collection = new Collection(['item1']);
        $this->assertFalse($collection->isEmpty());
    }


    public function testCount()
    {
        $collection = new Collection(['item1']);
        $this->assertCount(1, $collection);
        $this->assertInternalType('integer', $collection->count());
    }


    public function testToArray()
    {
        $data = ['item1', 'item2'];
        $collection = new Collection($data);

        $this->assertEquals($data, $collection->toArray());
    }


    public function testGetIterator()
    {
        $collection = new Collection();
        $this->assertInstanceOf(\Traversable::class, $collection->getIterator());
    }


    public function testFilter()
    {
        $collection = new Collection([1, 2, 3, 4, 5]);
        $filtered   = $collection->filter(function($item) {
            return ($item < 3);
        });

        $this->assertInstanceOf(Collection::class, $filtered);
        $this->assertCount(2, $filtered);
    }


    public function testMap()
    {
        $collection = new Collection([1, 2, 3, 4, 5]);
        $map = $collection->map(function($item) {
            return ($item + 1);
        });

        $this->assertCount(5, $map);
        $this->assertEquals([2, 3, 4, 5, 6], $map);
    }
}

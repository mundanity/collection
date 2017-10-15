<?php

use Mundanity\Collection\MutableKeyedCollection;


class MutableKeyedCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $collection = new MutableKeyedCollection(['key' => 'value']);
        $chained    = $collection->add('key2', 'value2');

        $this->assertCount(2, $collection);
        $this->assertSame($chained, $collection);
        $this->assertTrue($collection->hasKey('key2'));
    }


    public function testRemove()
    {
        $collection = new MutableKeyedCollection([
            'key'  => 'value',
            'key2' => 'value2',
        ]);
        $chained = $collection->remove('value2');

        $this->assertCount(1, $collection);
        $this->assertSame($chained, $collection);
        $this->assertFalse($collection->hasKey('key2'));
    }


    public function testRemoveByKey()
    {
        $collection = new MutableKeyedCollection([
            'key'  => 'value',
            'key2' => 'value2',
        ]);
        $chained = $collection->removeByKey('key2');

        $this->assertCount(1, $collection);
        $this->assertSame($chained, $collection);
        $this->assertFalse($collection->hasKey('key2'));
    }


    public function testFilterReturnsSameObject()
    {
        $collection = new MutableKeyedCollection([1, 2, 3]);
        $filtered   = $collection->filter(function($item) {
            return ($item < 3);
        });

        $this->assertCount(2, $filtered);
        $this->assertSame($collection, $filtered);
    }


    public function testMapReturnsSameObject()
    {
        $collection = new MutableKeyedCollection([1, 2, 3]);
        $mapped     = $collection->map(function($item) {
            return ($item * 2);
        });

        $this->assertSame($collection, $mapped);
    }
}

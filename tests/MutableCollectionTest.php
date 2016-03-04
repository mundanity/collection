<?php

use Mundanity\Collection\MutableCollection;


class MutableCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $collection = new MutableCollection(['item1']);
        $chained    = $collection->add('item2');

        $this->assertCount(2, $collection);
        $this->assertSame($chained, $collection);
    }


    public function testRemove()
    {
        $collection = new MutableCollection(['item1', 'item2']);
        $chained    = $collection->remove('item2');

        $this->assertCount(1, $collection);
        $this->assertSame($chained, $collection);

        $collection->remove('item3');
        $this->assertCount(1, $collection);
    }
}

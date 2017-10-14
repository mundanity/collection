[![Build Status](https://travis-ci.org/mundanity/collection.svg?branch=master)](https://travis-ci.org/mundanity/collection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mundanity/collection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mundanity/collection/?branch=master)

A simple PHP based collection.

## Usage

For basic usage, use the provided base class of [Collection](src/Collection.php) or [KeyedCollection](src/KeyedCollection.php). Each class has a mutable counterpart.

```php
<?php

$collection = new Collection([1, 2, 3]);
$collection->has(2); // true

$mutable = MutableCollection::fromCollection($collection);
$mutable->remove(2);
$mutable->has(2); // false
```

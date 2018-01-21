# Strategy pattern

From the [Wikipedia](https://en.wikipedia.org/wiki/Strategy_pattern),
the strategy pattern is a behavioral software design pattern that enables
selecting an algorithm at runtime. The strategy pattern
* defines a family of algorithms
* encapsulates each algorithm
* makes the algorithms interchangeable within that family.


## How to use the example
```php
<?php

use StrategyPattern\{
    Discount\PercentDiscount,
    Product\Product,
    Order\Order,
};

// Create 10% discount.
$discount = new PercentDiscount(10);

// Create Meizu M3s as a product then apply created discount.
$meizuM3s = new Product('Meizu M3s', 1000);
$meizuM3s->applyDiscount($discount);

// Create Iphone X as a product.
$iphoneX = new Product('Iphone X', 1000);

// Make an order then apply the discount again, but to the order.
$order = new Order();
$order->addProduct($meizuM3s);
$order->addProduct($iphoneX);
$order->applyDiscount($discount);
```
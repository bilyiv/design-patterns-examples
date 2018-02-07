# Strategy pattern

From the [Wikipedia](https://en.wikipedia.org/wiki/Strategy_pattern),
the strategy pattern is a behavioral software design pattern that enables
selecting an algorithm at runtime. The strategy pattern defines a family of algorithms,
encapsulates each algorithm, makes the algorithms interchangeable within that family.

## Strategy pattern example UML

![Strategy pattern example UML](https://raw.githubusercontent.com/bilyiv/design-patterns-php-examples/master/StrategyPattern/strategy-pattern-example-uml.png)

## How to use the example
```php
<?php

$discount = new PercentDiscount(50);

$phone = new BaseProduct('Phone', 200);
$phone->applyDiscount($discount);
echo $phone->price(); // 100

$computer = new BaseProduct('Computer', 800);
echo $computer->price(); // 800

$order = new BaseOrder();
$order->addProduct($phone);
$order->addProduct($computer);
$order->applyDiscount($discount);
echo $order->total(); // 450
```

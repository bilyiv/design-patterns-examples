## UML

![Strategy pattern example UML](https://raw.githubusercontent.com/bilyiv/design-patterns-php-examples/master/StrategyPattern/DiscountExample/uml.png)

## How to use
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

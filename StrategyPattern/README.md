# Strategy pattern

Strategy pattern on the example **order-product-discount**.

## How to use it
```php
<?php

use StrategyPattern\Discount\PercentDiscount;
use StrategyPattern\Product\Product;
use StrategyPattern\Order\Order;

// Create 10% discount.
$discount = new PercentDiscount(10);

// Create Meizu M3s phone as product and apply already created 10% discount.
$meizuM3s = new Product('Meizu M3s', 1000);
$meizuM3s->applyDiscount($discount);

// Create Iphone X phone as product.
$iphoneX = new Product('Iphone X', 1000);

// Make the order and apply the above discount again but to the order.
$order = new Order();
$order->addProduct($meizuM3s);
$order->addProduct($iphoneX);
$order->applyDiscount($discount);
```
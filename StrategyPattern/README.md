# Strategy pattern

Strategy pattern on the **order-product-discount** example.

## How to use it
```php
<?php

use StrategyPattern\Discount\PercentDiscount;
use StrategyPattern\Product\Product;
use StrategyPattern\Order\Order;

// Create 10% discount.
$discount = new PercentDiscount(10);

// Create Meizu M3s phone as a product and apply already created discount.
$meizuM3s = new Product('Meizu M3s', 1000);
$meizuM3s->applyDiscount($discount);

// Create Iphone X phone as a product.
$iphoneX = new Product('Iphone X', 1000);

// Make an order and apply the above discount again but to the order.
$order = new Order();
$order->addProduct($meizuM3s);
$order->addProduct($iphoneX);
$order->applyDiscount($discount);
```
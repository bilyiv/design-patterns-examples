<?php

namespace StrategyPattern\Order;

use StrategyPattern\Discount\DiscountInterface;
use StrategyPattern\Product\ProductInterface;

/**
 * Class Order
 *
 * @package StrategyPattern\Order
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Order implements OrderInterface
{
    /**
     * @var float
     */
    private $total = 0.00;

    /**
     * @inheritdoc
     */
    public function addProduct(ProductInterface $product)
    {
        $this->total += $product->price();
    }

    /**
     * @inheritdoc
     */
    public function total(): float
    {
        return $this->total;
    }

    /**
     * @inheritdoc
     */
    public function applyDiscount(DiscountInterface $discount)
    {
        $this->total -= $discount->calculate($this->total);
    }
}
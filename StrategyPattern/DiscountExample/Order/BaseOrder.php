<?php

namespace StrategyPattern\DiscountExample\Order;

use StrategyPattern\DiscountExample\Discount\{
    Discountable,
    Discount
};
use StrategyPattern\DiscountExample\Product\Saleable;

/**
 * Class BaseOrder
 *
 * @package StrategyPattern\Order
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class BaseOrder implements OrderInterface, Discountable
{
    /**
     * @var float
     */
    private $total = 0.00;

    /**
     * @inheritdoc
     */
    public function addProduct(Saleable $product)
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
    public function applyDiscount(Discount $discount)
    {
        $this->total -= $discount->calculate($this->total);
    }
}
<?php

namespace StrategyPattern\Order;

use StrategyPattern\Discount\{
    Discountable,
    DiscountInterface
};
use StrategyPattern\Product\Saleable;

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
    public function applyDiscount(DiscountInterface $discount)
    {
        $this->total -= $discount->calculate($this->total);
    }
}

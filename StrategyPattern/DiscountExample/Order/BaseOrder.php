<?php

namespace StrategyPattern\DiscountExample\Order;

use StrategyPattern\DiscountExample\Discount\{
    AbstractDiscount, DiscountableInterface
};
use StrategyPattern\DiscountExample\Product\SaleableInterface;

/**
 * Class BaseOrder
 *
 * @package StrategyPattern\Order
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class BaseOrder implements OrderInterface, DiscountableInterface
{
    /**
     * @var float
     */
    private $total = 0.00;

    /**
     * @inheritdoc
     */
    public function addProduct(SaleableInterface $product)
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
    public function applyDiscount(AbstractDiscount $discount)
    {
        $this->total -= $discount->calculate($this->total);
    }
}

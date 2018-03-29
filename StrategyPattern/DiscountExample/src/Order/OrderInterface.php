<?php

namespace StrategyPattern\DiscountExample\Order;

use StrategyPattern\DiscountExample\Product\SaleableInterface;

/**
 * Interface OrderInterface
 *
 * @package StrategyPattern\Order
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface OrderInterface
{
    /**
     * Add the product to the order.
     *
     * @param SaleableInterface $product
     */
    public function addProduct(SaleableInterface $product);

    /**
     * Retrieve the order total.
     *
     * @return float
     */
    public function total(): float;
}

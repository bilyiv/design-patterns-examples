<?php

namespace StrategyPattern\Order;

use StrategyPattern\Product\Saleable;

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
     * @param Saleable $product
     */
    public function addProduct(Saleable $product);

    /**
     * Retrieve the order total.
     *
     * @return float
     */
    public function total(): float;
}

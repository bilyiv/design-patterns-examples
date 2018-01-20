<?php

namespace StrategyPattern\Product;

use StrategyPattern\Discount\DiscountInterface;

/**
 * Interface ProductInterface
 *
 * @package StrategyPattern\Product
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface ProductInterface
{
    /**
     * Retrieve the product title.
     *
     * @return string
     */
    public function title(): string;

    /**
     * Retrieve the product price.
     *
     * @return float
     */
    public function price(): float;

    /**
     * Apply discount to the product.
     *
     * @param DiscountInterface $discount
     * @return mixed
     */
    public function applyDiscount(DiscountInterface $discount);
}
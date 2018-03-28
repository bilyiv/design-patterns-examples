<?php

namespace StrategyPattern\DiscountExample\Product;

/**
 * Interface SaleableInterface
 *
 * @package StrategyPattern\Product
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface SaleableInterface
{
    /**
     * Retrieve the subject title.
     *
     * @return string
     */
    public function title(): string;

    /**
     * Retrieve the subject price.
     *
     * @return float
     */
    public function price(): float;
}

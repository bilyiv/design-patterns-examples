<?php

namespace StrategyPattern\Product;

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
     */
    public function title(): string;

    /**
     * Retrieve the product price.
     */
    public function price(): float;
}
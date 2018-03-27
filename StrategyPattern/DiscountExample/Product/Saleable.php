<?php

namespace StrategyPattern\DiscountExample\Product;

/**
 * Interface Saleable
 *
 * @package StrategyPattern\Product
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface Saleable
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

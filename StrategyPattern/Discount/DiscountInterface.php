<?php

namespace StrategyPattern\Discount;

/**
 * Interface DiscountInterface
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface DiscountInterface
{
    /**
     * Calculate the discount of the amount.
     *
     * @param float $amount
     * @return float
     */
    public function calculate(float $amount): float;
}
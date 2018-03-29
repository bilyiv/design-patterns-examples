<?php

namespace StrategyPattern\DiscountExample\Discount;

/**
 * Class AbstractDiscount
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
abstract class AbstractDiscount
{
    /**
     * @var float
     */
    protected $size;

    public function __construct(float $size)
    {
        $this->size = $size;
    }

    /**
     * Calculate amount with discount.
     *
     * @param float $amount
     * @return float
     */
    abstract public function calculate(float $amount): float;
}
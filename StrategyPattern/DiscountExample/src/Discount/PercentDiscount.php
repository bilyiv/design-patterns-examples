<?php

namespace StrategyPattern\DiscountExample\Discount;

/**
 * Class PercentDiscount
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class PercentDiscount extends AbstractDiscount
{
    /**
     * @inheritdoc
     */
    public function calculate(float $amount): float
    {
        return $amount * $this->size / 100;
    }
}
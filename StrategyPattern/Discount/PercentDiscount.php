<?php

namespace StrategyPattern\Discount;

/**
 * Class PercentDiscount
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class PercentDiscount extends Discount
{
    /**
     * @inheritdoc
     */
    public function calculate(float $amount): float
    {
        return $amount * $this->size / 100;
    }
}
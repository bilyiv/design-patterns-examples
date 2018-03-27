<?php

namespace StrategyPattern\Discount;

/**
 * Class StaticDiscount
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class StaticDiscount extends Discount
{
    /**
     * @inheritdoc
     */
    public function calculate(float $amount): float
    {
        return $amount - $this->size;
    }
}
<?php

namespace StrategyPattern\DiscountExample\Discount;

/**
 * Class StaticDiscount
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class StaticDiscount extends AbstractDiscount
{
    /**
     * @inheritdoc
     */
    public function calculate(float $amount): float
    {
        return $amount - $this->size;
    }
}
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
    public function calculate($amount);
}
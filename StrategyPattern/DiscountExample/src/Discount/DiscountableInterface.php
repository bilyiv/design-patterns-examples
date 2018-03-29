<?php

namespace StrategyPattern\DiscountExample\Discount;

/**
 * Interface Discountable
 *
 * @package StrategyPattern\Discount
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface DiscountableInterface
{
    /**
     * Apply the discount to the subject.
     *
     * @param AbstractDiscount $discount
     */
    public function applyDiscount(AbstractDiscount $discount);
}